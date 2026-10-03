<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserAccounts extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('users', $data);
    }

    public function create()
    {
        return view('user_new');
    }

    public function store()
    {
        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/users/new')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->find($id);

        if (! $data['user']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('user_edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'username'  => "required|is_unique[users.username,id,{$id}]",
            'full_name' => 'required'
        ];

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = [
                'rules' => 'uploaded[avatar]|max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]'
            ];
        }

        if (! $this->validate($rules)) {
            return redirect()->to('/users/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarName = $avatar->getRandomName();

            $avatar->move(FCPATH . 'uploads/avatars', $avatarName);

            service('image')
                ->withFile(FCPATH . 'uploads/avatars/' . $avatarName)
                ->fit(150, 150, 'center')
                ->save(FCPATH . 'uploads/avatars/' . $avatarName);

            $data['avatar'] = $avatarName;
        }

        $userModel = new UserModel();

        $userModel->update($id, $data);

        return redirect()->to('/users');
    }
}