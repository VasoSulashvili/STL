<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        // $page = Contact::first();
        return view('client.contact.index')
            ->with('title', 'contact us')
            ->with('breadcrumbs', $breadcrumbs);
            // ->with('page', $page);
    }
}
