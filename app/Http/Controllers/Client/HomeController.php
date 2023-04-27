<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Job;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $teamId = Job::where('name->en', '=', 'Team')->first()->id;
        $teamMemberIds = DB::table('person_job')->where('job_id', '=', $teamId)->pluck('person_id')->toArray();
        $team = Person::whereIn('id', $teamMemberIds)->get();
        // dd($team);
        return view('client.home.index')
            ->with('banner', Banner::active()->first())
            ->with('team', $team);
    }
}
