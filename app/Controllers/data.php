<?php

namespace App\Controllers;

class data extends BaseController
{
    protected $data_model;
    public function __construct() {
        $this->model = new \data_model;
    }
    
    public function index()
    {
        $data['data'] = $this->data_model->get_data();
        return view('data_list', $data);
    }

    public function detail($id) {
        $data['data'] = $this->data_model->get_data_by_id($id);
        return view('data_detail', $data);
    }
}
