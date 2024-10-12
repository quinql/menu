<?php

namespace App\Controllers;

class AdminloginController extends BaseController
{
    public function index()
     {
        $isLoggedIn = session()->get('isLoggedIn');
        return view('adminlogin', ['isLoggedIn' => $isLoggedIn]);
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
                if($user["Role"] == "Admin" || $user["Role"] == "Staff")
                {
                 // Set user information in the session
                session()->set([
                    'isLoggedIn' => true,
                    'UserID' => $user['UserID'],
                    'UserName' => $user['UserName'],
                    'Password' => $user['Password'],
                    'Role' => $user['Role']
                ]);
                return redirect()->to('/staffman');
            }else {
                session()->setFlashdata('error', 'You do not have admin access.');
                return redirect()->to('/adminlogin');
            } 
            } else {
                // fail 
                session()->setFlashdata('error', 'Invalid username or password.');
                return redirect()->to('/adminlogin');
            } 
            }else {
                    session()->setFlashdata('error', 'Invalid username or password.');
                    return redirect()->to('/adminlogin');
                
                
            }

     }
}
