<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExpModel;
use App\Models\CateModel;

class ExController extends BaseController
{
    public function index()
    {
        $cata = new CateModel();
        $data['category'] = $cata->findAll();
        return view('pages/expanse/exAdd',$data);
    }
//Add Data
    public function exAdd()
    {
        $add = new ExpModel();
        $data = 
        [
            'ex_amount'=>$this->request->getPost('ex_amount'),
            'date'=>$this->request->getPost('date'),
            'category'=>$this->request->getPost('category'),

        ];
        $add->save($data);
        return redirect('exAdd');
    }
//View All Data
    public function fetchcat()
    {
        $ExView = new ExpModel();
        $data['ExView'] = $ExView->orderBy('ex_id', 'DESC')
        ->join('category' ,'category.cate_id = expanse.category')     
        ->findAll();
        return view("/pages/expanse/exView", $data);
    }

//Edit Data
    public function Edit($category_id = null)
    {   $cata = new CateModel();
        $data['category'] = $cata->findAll();

        $view = new ExpModel();
        $data['exData'] = $view->where('ex_id', $category_id)->first();
        return view('/pages/expanse/exEdit.php', $data);
    }

//Update Data
    public function update($ex = null)
    {
        $update=  new ExpModel();
        $data = 
        [
            'ex_amount'=>$this->request->getPost('ex_amount'),
            'date'=>$this->request->getPost('date'),
            'category'=>$this->request->getPost('category'),
        ];

        $update->update($ex, $data);
        return redirect('exView');
    }
//Delete data
    public function delete($exid = null)
    {
        $view = new ExpModel();
        $view->delete($exid);
        return redirect('exView');
    }
}
