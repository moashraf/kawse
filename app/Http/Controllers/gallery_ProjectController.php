<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creategallery_ProjectRequest;
use App\Http\Requests\Updategallery_ProjectRequest;
use App\Repositories\gallery_ProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class gallery_ProjectController extends AppBaseController
{
    /** @var  gallery_ProjectRepository */
    private $galleryProjectRepository;

    public function __construct(gallery_ProjectRepository $galleryProjectRepo)
    {
        $this->galleryProjectRepository = $galleryProjectRepo;
    }

    /**
     * Display a listing of the gallery_Project.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryProjectRepository->pushCriteria(new RequestCriteria($request));
        $galleryProjects = $this->galleryProjectRepository->all();

        return view('gallery__projects.index')
            ->with('galleryProjects', $galleryProjects);
    }

    /**
     * Show the form for creating a new gallery_Project.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery__projects.create');
    }

    /**
     * Store a newly created gallery_Project in storage.
     *
     * @param Creategallery_ProjectRequest $request
     *
     * @return Response
     */
    public function store(Creategallery_ProjectRequest $request)
    {
        $input = $request->all();
        $photoexplode = $request->img->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(base_path() . '/public/data/', $imageNameGallery);
        $input['img']=    $imageNameGallery;


        $galleryProject = $this->galleryProjectRepository->create($input);

        Flash::success('Gallery  Project saved successfully.');

        return redirect(route('galleryProjects.index'));
    }

    /**
     * Display the specified gallery_Project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galleryProject = $this->galleryProjectRepository->findWithoutFail($id);

        if (empty($galleryProject)) {
            Flash::error('Gallery  Project not found');

            return redirect(route('galleryProjects.index'));
        }

        return view('gallery__projects.show')->with('galleryProject', $galleryProject);
    }

    /**
     * Show the form for editing the specified gallery_Project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

       



        $galleryProject = $this->galleryProjectRepository->findWithoutFail($id);

        if (empty($galleryProject)) {
            Flash::error('Gallery  Project not found');

            return redirect(route('galleryProjects.index'));
        }

        return view('gallery__projects.edit')->with('galleryProject', $galleryProject);
    }

    /**
     * Update the specified gallery_Project in storage.
     *
     * @param  int              $id
     * @param Updategallery_ProjectRequest $request
     *
     * @return Response
     */
    public function update($id, Updategallery_ProjectRequest $request)
    { $input = $request->all();
        $photoexplode = $request->img->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(base_path() . '/public/data/', $imageNameGallery);
        $input['img']=    $imageNameGallery;


        $galleryProject = $this->galleryProjectRepository->findWithoutFail($id);

        if (empty($galleryProject)) {
            Flash::error('Gallery  Project not found');

            return redirect(route('galleryProjects.index'));
        }

        $galleryProject = $this->galleryProjectRepository->update($input, $id);

        Flash::success('Gallery  Project updated successfully.');

        return redirect(route('galleryProjects.index'));
    }

    /**
     * Remove the specified gallery_Project from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryProject = $this->galleryProjectRepository->findWithoutFail($id);

        if (empty($galleryProject)) {
            Flash::error('Gallery  Project not found');

            return redirect(route('galleryProjects.index'));
        }

        $this->galleryProjectRepository->delete($id);

        Flash::success('Gallery  Project deleted successfully.');

        return redirect(route('galleryProjects.index'));
    }
}
