<?php

namespace App\Controllers;

class PostComment extends BaseController
{
    // public function index()
    // {
    //     return view('templates/header')
    //         . view('templates/header-assets3')

    //         . view('post-comment');

    //   .view('templates/footer'); 
    //not working
    // }
    public function index()
    {
            $session = session();
    // ensure current_project structure exists
    if (! $session->has('current_project')) {
        $session->set('current_project', [
            [ 'project_index' => 1 ] // default or placeholder
        ]);
    }


        echo view('templates/header');
        echo view('templates/header-assets3', ['session' => $session]); // <- pass it in
        echo view('post-comment');
    echo view('templates/footer', ['session' => $session]);    }
}
