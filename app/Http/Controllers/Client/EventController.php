<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['title' => 'home', 'url' => route('home')]
        ];
        // $page = Contact::first();
        return view('client.events.index')
            ->with('title', 'Events')
            ->with('breadcrumbs', $breadcrumbs);
            // ->with('page', $page);
    }
}
