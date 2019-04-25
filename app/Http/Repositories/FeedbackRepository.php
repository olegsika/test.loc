<?php

namespace App\Http\Repositories;

use App\Feedback;
use App\Http\Repositories\Interfaces\IFeedbackRepository;

class FeedbackRepository implements IFeedbackRepository
{
    public function store($request)
    {
        $path = $request->file('file')->store('uploads', 'public');

        if($path){
            Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'site' => $request->site,
                'file' => $path
            ]);

            return redirect()->back();
        }

        return redirect()->back();

    }

    public function index()
    {
        return Feedback::all();
    }

}