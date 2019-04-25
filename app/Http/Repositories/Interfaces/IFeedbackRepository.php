<?php

namespace App\Http\Repositories\Interfaces;


interface IFeedbackRepository
{
    public function store($request);

    public function index();
}