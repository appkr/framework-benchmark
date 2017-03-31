<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        // return view('index');

        $todos = App::get('database')->selectAll('todos');
        var_dump('HOMEMADE: ' . (microtime(true) - HOMEMADE_START));
        var_dump(performance());

        var_dump (json_encode($todos));
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Your Company';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
