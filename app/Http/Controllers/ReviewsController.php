<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;
use App\Repositories\ReviewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReviewsController extends AppBaseController
{
    /** @var  ReviewsRepository */
    private $reviewsRepository;

    public function __construct(ReviewsRepository $reviewsRepo)
    {
        $this->reviewsRepository = $reviewsRepo;
    }

    /**
     * Display a listing of the Reviews.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reviewsRepository->pushCriteria(new RequestCriteria($request));
        $reviews = $this->reviewsRepository->all();

        return view('reviews.index')
            ->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new Reviews.
     *
     * @return Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created Reviews in storage.
     *
     * @param CreateReviewsRequest $request
     *
     * @return Response
     */
    public function store(CreateReviewsRequest $request)
    {
            $input = $request->all();
            $photoexplode = $request->photo->getClientOriginalName();
            $photoexplode = explode(".", $photoexplode);
            $namerand = rand();
            $namerand.= $photoexplode[0];
            $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
            $input['photo']=$imageNameGallery;
            $reviews = $this->reviewsRepository->create($input);

        Flash::success('Reviews saved successfully.');

        return redirect(route('reviews.index'));
    }

    /**
     * Display the specified Reviews.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reviews = $this->reviewsRepository->findWithoutFail($id);

        if (empty($reviews)) {
            Flash::error('Reviews not found');

            return redirect(route('reviews.index'));
        }

        return view('reviews.show')->with('reviews', $reviews);
    }

    /**
     * Show the form for editing the specified Reviews.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reviews = $this->reviewsRepository->findWithoutFail($id);

        if (empty($reviews)) {
            Flash::error('Reviews not found');

            return redirect(route('reviews.index'));
        }

        return view('reviews.edit')->with('reviews', $reviews);
    }

    /**
     * Update the specified Reviews in storage.
     *
     * @param  int              $id
     * @param UpdateReviewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReviewsRequest $request)
    {
                 $input = $request->all();
            $photoexplode = $request->photo->getClientOriginalName();
            $photoexplode = explode(".", $photoexplode);
            $namerand = rand();
            $namerand.= $photoexplode[0];
            $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
            $input['photo']=$imageNameGallery;
             $reviews = $this->reviewsRepository->findWithoutFail($id);

        if (empty($reviews)) {
            Flash::error('Reviews not found');

            return redirect(route('reviews.index'));
        }

        $reviews = $this->reviewsRepository->update($input , $id);

        Flash::success('Reviews updated successfully.');

        return redirect(route('reviews.index'));
    }

    /**
     * Remove the specified Reviews from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reviews = $this->reviewsRepository->findWithoutFail($id);

        if (empty($reviews)) {
            Flash::error('Reviews not found');

            return redirect(route('reviews.index'));
        }

        $this->reviewsRepository->delete($id);

        Flash::success('Reviews deleted successfully.');

        return redirect(route('reviews.index'));
    }
}
