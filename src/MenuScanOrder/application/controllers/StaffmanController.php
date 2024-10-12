<?php

namespace App\Controllers;

class StaffmanController extends BaseController
{
     public function index()
    {
        $model = new \App\Models\StaffModel();
        $data['staffman'] = $model->findAll();
        return view('staffman',$data);
    }

    //add function
    public function add_user()
    {
        if ($this->request->getMethod() === 'POST'){
            $data = $this->request->getPost();
            $model = new \App\Models\StaffModel();
            if ($model->insert($data)) {
                session()->setFlashdata('success', 'User added successfully.');
                return redirect()->to('/staffman');
            } else {
                session()->setFlashdata('error', 'Failed to add user. Please try again.');
            }
        }
        return redirect()->to('/staffman');
    }

    //delete function
    public function delete_user($UserID)
    {
        $model = new \App\Models\StaffModel();
        if ($model->delete($UserID)) {
            session()->setFlashdata('success', 'User deleted successfully.');
            return redirect()->to('/staffman');
        } else {
            session()->setFlashdata('error', 'Failed to deleted user. Please try again.');
        }
        return redirect()->to('/staffman');
    }

    //edit function
    public function edit_user($UserID)
    {
        $model = new \App\Models\StaffModel();
        if ($this->request->getMethod() === 'POST') {
            $data = $this->request->getPost();
            if ($model->update($UserID, $data)) {
                session()->setFlashdata('success', 'User updated successfully.');
                return redirect()->to('/staffman');
            } else {
                session()->setFlashdata('error', 'Failed to update user. Please try again.');
                return redirect()->back()->withInput();
            }
        }
        return redirect()->to('/staffman');
    }


}
