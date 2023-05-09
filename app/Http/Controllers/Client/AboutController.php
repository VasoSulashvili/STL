<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Job;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $breadcrumbs = [
            ['title' => 'home', 'url' => route('home')]
        ];

        $team = '';
        $about = About::first();
        $team = Job::where('name->en', PJ_TEAM['en'])
            ->orWhere('name->ka', PJ_TEAM['ka'])
            ->first()
            ->persons;
        if(!$about)
        {
            abort(404);
        }
        return view('client.about.index')
            ->with('title', 'about us')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('about', $about)
            ->with('team', $team);
    }
}
