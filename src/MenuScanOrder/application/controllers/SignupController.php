<?php

namespace App\Controllers;

class SignupController extends BaseController
{
    public function index()
     {

        return view('signup');
     }
     public function signup()
     {

            $data = $this->request->getPost();
            $model = new \App\Models\StaffModel();
            
            // role must be User
            $data['Role'] = 'User';

            // check
            $existing_user = $model->where("UserName", $data["UserName"])->find();
            if ($existing_user) {
                session()->setFlashdata('error', 'User already exists!!');
                return redirect()->back()->withInput(); 
            }

            // Insert the new user
            if ($model->insert($data)) {
                session()->setFlashdata('success', 'User added successfully.');
                return redirect()->to('/login');
            } else {
                session()->setFlashdata('error', 'Failed to add user. Please try again.');
                return redirect()->back()->withInput();
            }
            
        
     }
}
