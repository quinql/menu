<?php

namespace App\Controllers;

class MenumanController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\MenuModel();
        $data['menuman'] = $model->findAll();
        return view('menuman',$data);
    }

    //add function
    public function add_item()
    {
        if ($this->request->getMethod() === 'POST'){
            $data = $this->request->getPost();
            $model = new \App\Models\MenuModel();
            if ($model->insert($data)) {
                session()->setFlashdata('success', 'Item added successfully.');
                return redirect()->to('/menuman');
            } else {
                session()->setFlashdata('error', 'Failed to add item. Please try again.');
            }
        }
        
    }

    // delete function
    public function delete_item($ItemID)
    {
        $model = new \App\Models\MenuModel();
        if ($model->delete($ItemID)) {
            session()->setFlashdata('success', 'Item deleted successfully.');
            return redirect()->to('/menuman');
        } else {
            session()->setFlashdata('error', 'Failed to deleted item. Please try again.');
        }
    }

    //edit function
    public function edit_item($ItemID)
    {
        $model = new \App\Models\MenuModel();
        if ($this->request->getMethod() === 'POST') {
            $data = $this->request->getPost();
            if ($model->update($ItemID, $data)) {
                session()->setFlashdata('success', 'Item updated successfully.');
                return redirect()->to('/menuman');
            } else {
                session()->setFlashdata('error', 'Failed to update item. Please try again.');
                return redirect()->back()->withInput();
            }
        }
        return redirect()->to('/menuman');
    }
}
