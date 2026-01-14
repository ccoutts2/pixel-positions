<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke ()
    {
        $jobs = Job::with(['employer', 'tags'])
        ->where('title', 'LIKE', '%'.request('q').'%')
        ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
