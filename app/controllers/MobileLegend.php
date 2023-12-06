<?php

namespace App\Controllers;

use App\Core\Controller;

class MobileLegend extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\MobileLegend();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('Mobilelegend/index', $data);
     }

     public function input()
     {
          $this->dashboard('mobilelegend/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/mobilelegend');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('mobilelegend/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/mobilelegend');
     }

     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/mobilelegend');
	}
}
