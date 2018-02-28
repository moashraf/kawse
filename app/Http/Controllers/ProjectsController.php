<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Repositories\ProjectsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\gallery_Project;
use App\Models\catProject;


class ProjectsController extends AppBaseController
{
    /** @var  ProjectsRepository */
    private $projectsRepository;

    public function __construct(ProjectsRepository $projectsRepo)
    {
        $this->projectsRepository = $projectsRepo;
    }

    /**
     * Display a listing of the Projects.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectsRepository->pushCriteria(new RequestCriteria($request));
        $projects = $this->projectsRepository->all();

        return view('projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new Projects.
     *
     * @return Response
     */
    public function create()
    {
          $catProject = catProject::pluck('title','id');

        return view('projects.create')->with('catProject', $catProject);
    }

    /**
     * Store a newly created Projects in storage.
     *
     * @param CreateProjectsRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectsRequest $request)
    {
        $input = $request->all();

    $photoexplode = $request->photo->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
               $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
$input['photo']=    $imageNameGallery;
                 $projects = $this->projectsRepository->create($input);
  foreach($request->gallery as $photo1)
                {
                $photoexplode = $photo1->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
                $photo1->move(base_path() . '/public/data/', $imageNameGallery);
                $Singleboatgallery = new gallery_Project;
                $Singleboatgallery->projects_id =  $projects->id;
                $Singleboatgallery->img_url = "$imageNameGallery";
                 $Singleboatgallery->save();
                }


        Flash::success('Projects saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified Projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified Projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $catProject = catProject::pluck('title','id');

         $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('projects', $projects)->with('catProject', $catProject);
    }

    /**
     * Update the specified Projects in storage.
     *
     * @param  int              $id
     * @param UpdateProjectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectsRequest $request)
    {

        $projects = $this->projectsRepository->findWithoutFail($id);
  if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $projects = $this->projectsRepository->update($request->all(), $id);
  foreach($request->gallery as $photo1)
                {
 
                $photoexplode = $photo1->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
                $photo1->move(base_path() . '/public/data/', $imageNameGallery);
                $Singleboatgallery = new gallery_Project;
                $Singleboatgallery->projects_id =  $projects->id;
                $Singleboatgallery->img_url = "$imageNameGallery";
                 $Singleboatgallery->save();
                }
        Flash::success('Projects updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified Projects from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $this->projectsRepository->delete($id);

        Flash::success('Projects deleted successfully.');

        return redirect(route('projects.index'));
    }
}
