<?php


class Pages extends Controller
{

    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function test(){
        $this->pagesModel->addUser();
        echo 'vist toimib :D';
    }

    public function edit(){
        $this->view('pages/edit');
    }

    public function index() {
        $data = array('title' => 'Welcome');
        $this->view('pages/index', $data);
    }
}