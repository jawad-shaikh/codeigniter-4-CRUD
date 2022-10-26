<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\user_model;

class Users extends Controller
{
    public function index()
    {
        $model = new user_model();
        $data['users'] = $model->getUsers();
        echo view('user_view', $data);
    }

    public function add_new()
    {
        echo view('add_user_view');
    }

    public function save_user()
    {
        $model = new user_model();
        $data = [
            'username'  => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        $model->saveUser($data);
        return redirect()->to('/users');
    }

    public function edit_user($id)
    {
        $model = new user_model();
        $data['users'] = $model->getUsers($id)->getRow();
        echo view('edit_user_view', $data);
    }

    public function save_edit_user($id)
    {
        $model = new user_model();
        $data = [
            'username'  => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        $model->updateUser($data, $id);
        return redirect()->to('/users');
    }

    public function delete_user($id)
    {
        echo "<script>alert('$id')</script>";
        $model = new user_model();
        $model->deleteUser($id);
        return redirect()->to('/users');
    }
}
