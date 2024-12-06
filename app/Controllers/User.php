<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('user_list', $data);
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ]);

        if ($validation->withRequest($this->request)->run() === FALSE) {
            return view('create_user', [
                'validation' => $this->validator
            ]);
        }

        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $model->save($data);
        session()->setFlashdata('success', 'User successfully created.');
        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        return view('edit_user', $data);
    }

    public function update()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ]);

        $id = $this->request->getPost('id');
        $model = new UserModel();

        if ($validation->withRequest($this->request)->run() === FALSE) {
            return view('edit_user', [
                'user' => $model->find($id),
                'validation' => $this->validator
            ]);
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $model->update($id, $data);
        session()->setFlashdata('success', 'User successfully updated.');
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        session()->setFlashdata('success', 'User successfully deleted.');
        return redirect()->to('/user');
    }
}
