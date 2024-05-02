<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use CodeIgniter\Controller;

    // show profiles list
    public function index()
    {
        $ProfileModel = new ProfileModel();
        $data['profiles'] = $ProfileModel->orderBy('id', 'DESC')->findAll();
        return view('profile_view', $data);
    }

    // add profile form
    public function create()
    {
        return view('add_profile');
    }

    // insert data 
    public function store()
    {
        $ProfileModel = new ProfileModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'photo' => $this->request->getVar('photo'),
            'name' => $this->request->getVar('name'),
        ];
        $ProfileModel->insert($data);
        return $this->response->redirect(site_url('/profiles-list'));
    }

    // show single profile 
    public function singleProfile($id = null)
    {
        $ProfileModel = new ProfileModel();
        $data['profile_obj'] = $ProfileModel->where('id', $id)->first();
        return view('edit_view', $data); 
    }

    // update profiles data 
    public function update()
    {
        $ProfileModel = new ProfileModel();
        $id = $this->request->getVar('email');
        $data = [
            'email' => $this->request->getVar('email'),
            'photo' => $this->request->getVar('photo'),
            'name' => $this->request->getVar('name'),
        ];
        $ProfileModel->update($id, $data);
        return $this->response->redirect(site_url('/profiles-list'));
    }

    // delete profile

    public function delete($id = null)
    {
        $ProfileModel = new ProfileModel();
        $data['profile'] = $ProfileModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/profiles-list'));
    }