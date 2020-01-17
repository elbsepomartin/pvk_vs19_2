<?php


class Pages extends Controller
{
    public function __construct()
    {
        echo 'Pages is loaded<br>';
    }

    public function edit(){
        $this->view('pages/edit');
    }

    public function index() {
        $this->view('pages/index');
    }
}