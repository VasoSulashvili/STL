<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function team()
    {

    }


    public function instructors()
    {

    }


    public function show(Request $request, $locale, Person $person)
    {
        $breadcrumbs = [
            ['title' => 'home', 'url' => route('home')]
        ];

        $team = Job::where('name->en', 'Team')->first()->persons;
        if(!$person)
        {
            abort(404);
        }
        
        return view('client.person.show')
            ->with('title', 'about us')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('person', $person)
            ->with('team', $team);
    }
}
