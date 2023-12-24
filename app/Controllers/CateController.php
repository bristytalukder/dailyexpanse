<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CateModel;

class CateController extends BaseController
{
    public function index()
    {
        return view('pages/category/cateAdd');
    }

//Add Data
    public function cateAdd()
    {
        $add = new CateModel();
        $data = 
        [
            'cate_name'=>$this->request->getPost('cate_name'),
        ];
        $add->save($data);
        return redirect('cateAdd');
    }
//View All Data
      public function fetchcat()
      {
          $viewC = new CateModel();
          $data['viewC'] = $viewC->orderBy('cate_id', 'DESC')->findAll();
          return view("/pages/category/cateView.php", $data);
      }

//Delete data
    public function delete($category_id = null)
    {
        $view = new CateModel();
        $view->delete($category_id);
        return redirect('cateView');
    }
//Edit Data
    public function Edit($category_id = null)
    {
        $view = new CateModel();
        $data['category'] = $view->where('cate_id', $category_id)->first();
        return view('/pages/category/cateEdit.php', $data);
    }

//Update Data
    public function update($category_id = null)
    {
        $update=  new CateModel();
        $data = 
        [
            'cate_name'=>$this->request->getPost('cate_name'),
        ];
        $update->update($category_id, $data);
        return redirect('cateView');
    }
   
}
