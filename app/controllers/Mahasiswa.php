<?php

namespace App\Controllers;

use App\Core\Controller;

class Mahasiswa extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Mahasiswa();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('Mahasiswa/index', $data);
     }

     public function input()
     {
          $this->dashboard('mahasiswa/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/mahasiswa');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('mahasiswa/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/mahasiswa');
     }

     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/mahasiswa');
	}
}
