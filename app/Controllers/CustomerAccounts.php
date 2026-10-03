<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerAccounts extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data['customers'] = $customerModel->findAll();

        return view('customers', $data);
    }

    public function create()
    {
        return view('customer_new');
    }

    public function store()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/customers/new')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();

        $customerModel->insert([
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $customerModel = new CustomerModel();

        $data['customer'] = $customerModel->find($id);

        if (! $data['customer']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('customer_edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/customers/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();

        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ]);

        return redirect()->to('/customers');
    }
}