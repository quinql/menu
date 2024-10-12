<?php

namespace App\Controllers;

class OrdermanController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\ViewModel();
        $data['orderman'] = $model->findAll();
        return view('orderman',$data);
    }

    //add function
    public function add_order()
    {
        if ($this->request->getMethod() === 'POST'){
            $data = $this->request->getPost();
            $model = new \App\Models\ViewModel();
            if ($model->insert($data)) {
                session()->setFlashdata('success', 'Item added successfully.');
                return redirect()->to('/orderman');
            } else {
                session()->setFlashdata('error', 'Failed to add item. Please try again.');
            }
        }
        
    }

    // delete function
    public function delete_order($OrderID)
    {
        $model = new \App\Models\ViewModel();
        if ($model->delete($OrderID)) {
            session()->setFlashdata('success', 'Item deleted successfully.');
            return redirect()->to('/orderman');
        } else {
            session()->setFlashdata('error', 'Failed to deleted item. Please try again.');
        }
    }

    //edit function
    public function edit_order($OrderID)
    {
        $model = new \App\Models\ViewModel();
        if ($this->request->getMethod() === 'POST') {
            $data = $this->request->getPost();
            if ($model->update($OrderID, $data)) {
                session()->setFlashdata('success', 'Item updated successfully.');
                return redirect()->to('/orderman');
            } else {
                session()->setFlashdata('error', 'Failed to update item. Please try again.');
                return redirect()->back()->withInput();
            }
        }
        return redirect()->to('/orderman');
    }
}
