<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
     {
        $isLoggedIn = session()->get('isLoggedIn');
        return view('login', ['isLoggedIn' => $isLoggedIn]);
     }
     public function login()
     {
        $data = $this->request->getPost();
        $model = new \App\Models\StaffModel();

        $existing_user = $model->where("UserName", $data["UserName"])->find();
        if($existing_user){
            $user = $existing_user[0];
            if($user["UserName"] == $data["UserName"] && $user["Password"] == $data["Password"])
            {
                 // Set user information in the session
                session()->set([
                    'isLoggedIn' => true,
                    'UserID' => $user['UserID'],
                    'UserName' => $user['UserName'],
                    'Password' => $user['Password'],
                    'Role' => $user['Role']
                    // 'isAdmin' => $user['isAdmin'] // Assumes 'isAdmin' field is a boolean in your user table
                ]);
                return redirect()->to('/items');
            } else {
                // fail 
                session()->setFlashdata('error', 'Invalid username or password.');
                return redirect()->to('/login');
            }
            }else {
                session()->setFlashdata('error', 'Invalid username or password.');
                return redirect()->to('/login');
            }

     }
}
