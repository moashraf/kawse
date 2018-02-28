<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecatProjectRequest;
use App\Http\Requests\UpdatecatProjectRequest;
use App\Repositories\catProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class catProjectController extends AppBaseController
{
    /** @var  catProjectRepository */
    private $catProjectRepository;

    public function __construct(catProjectRepository $catProjectRepo)
    {
        $this->catProjectRepository = $catProjectRepo;
    }

    /**
     * Display a listing of the catProject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catProjectRepository->pushCriteria(new RequestCriteria($request));
        $catProjects = $this->catProjectRepository->all();

        return view('cat_projects.index')
            ->with('catProjects', $catProjects);
    }

    /**
     * Show the form for creating a new catProject.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_projects.create');
    }

    /**
     * Store a newly created catProject in storage.
     *
     * @param CreatecatProjectRequest $request
     *
     * @return Response
     */
    public function store(CreatecatProjectRequest $request)
    {
        $input = $request->all();
 $photoexplode = $request->img_url->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $request->img_url->getClientOriginalExtension();
               $request->img_url->move(base_path() . '/public/data/', $imageNameGallery);
$input['img_url']=    $imageNameGallery;

        $catProject = $this->catProjectRepository->create($input);

        Flash::success('Cat Project saved successfully.');

        return redirect(route('catProjects.index'));
    }

    /**
     * Display the specified catProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catProject = $this->catProjectRepository->findWithoutFail($id);

        if (empty($catProject)) {
            Flash::error('Cat Project not found');

            return redirect(route('catProjects.index'));
        }

        return view('cat_projects.show')->with('catProject', $catProject);
    }

    /**
     * Show the form for editing the specified catProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $catProject = $this->catProjectRepository->findWithoutFail($id);

        if (empty($catProject)) {
            Flash::error('Cat Project not found');

            return redirect(route('catProjects.index'));
        }

        return view('cat_projects.edit')->with('catProject', $catProject);
    }

    /**
     * Update the specified catProject in storage.
     *
     * @param  int              $id
     * @param UpdatecatProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecatProjectRequest $request)
    {
        $input = $request->all();
        $photoexplode = $request->img_url->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $request->img_url->getClientOriginalExtension();
               $request->img_url->move(base_path() . '/public/data/', $imageNameGallery);
$input['img_url']=    $imageNameGallery;



        $catProject = $this->catProjectRepository->findWithoutFail($id);

        if (empty($catProject)) {
            Flash::error('Cat Project not found');

            return redirect(route('catProjects.index'));
        }

        $catProject = $this->catProjectRepository->update($input, $id);

        Flash::success('Cat Project updated successfully.');

        return redirect(route('catProjects.index'));
    }

    /**
     * Remove the specified catProject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catProject = $this->catProjectRepository->findWithoutFail($id);

        if (empty($catProject)) {
            Flash::error('Cat Project not found');

            return redirect(route('catProjects.index'));
        }

        $this->catProjectRepository->delete($id);

        Flash::success('Cat Project deleted successfully.');

        return redirect(route('catProjects.index'));
    }
}
