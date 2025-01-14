<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Tag;

class SearchController extends Controller
{
    public function __invoke(){
        $searchQuery = request('q');

        $jobs = Job::with(['employer','tags'])->where('title', 'LIKE', '%'.$searchQuery.'%')->orWhereHas('tags', function($query) use ($searchQuery){
            $query->where('name', 'LIKE', '%'.$searchQuery.'%');

        })->get();

        return view('jobs.results', ['jobs' => $jobs]);
    }
}
