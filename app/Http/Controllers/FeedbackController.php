<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Interfaces\IFeedbackRepository;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    protected $feedbackRepository;

    public function __construct(IFeedbackRepository $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function store(FeedbackRequest $request)
    {
        return $this->feedbackRepository->store($request);
    }

    public function index() {
        $feedbacks = $this->feedbackRepository->index();

        return view('welcome', compact($feedbacks, 'feedbacks'));

    }
}
