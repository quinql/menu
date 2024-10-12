<?php

namespace App\Controllers;

class ItemsController extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\MenuModel();
        $data['items'] = $model->findAll();
        return view('items',$data);
    }
    
}
