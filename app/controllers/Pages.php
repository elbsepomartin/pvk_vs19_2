<?php


class Pages extends Controller
{
    public function __construct()
    {
    }

    public function edit(){
        $this->view('pages/edit');
    }

    public function index() {
        $data = array('title' => 'Page controller is loaded');
        $this->view('pages/index', $data);
    }
}