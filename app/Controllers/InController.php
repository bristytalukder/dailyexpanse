<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\InModel;
use App\Models\IncModel;

class InController extends BaseController
{
    public function index()
    {   $InView = new IncModel();
        $data['inCategory'] = $InView->orderBy('inc_id', 'DESC')->findAll();
         return view('pages/income/inAdd',$data);
    }

//Add Data
public function inAdd()
{
    $add = new InModel();
    $data = 
    [
        'in_amount'=>$this->request->getPost('in_amount'),
        'date'=>$this->request->getPost('date'),
        'in_category'=>$this->request->getPost('in_category'),
    ];
    $add->save($data);
    return redirect('inAdd');
}

//View All Data
public function fetchcat()
{
    $InView = new InModel();
    $data['InView'] = $InView
    ->join('in_category' ,'in_category.inc_id = income.in_category')     
    ->orderBy('in_id', 'DESC')
    ->findAll();
    return view("/pages/income/inView.php", $data);
}


//Edit Data
public function Edit($in_id = null)
{   $cata = new IncModel();
    $data['fixdcategory'] = $cata->findAll();

    $view = new InModel();
    $data['inData'] = $view->where('in_id', $in_id)->first();

    return view('/pages/income/inEdit.php', $data);
}

//Update Data
public function update($in = null)
{
    $update=  new InModel();
    $data = 
    [
        'in_amount'=>$this->request->getPost('in_amount'),
        'date'=>$this->request->getPost('date'),
        'in_category'=>$this->request->getPost('in_category'),
    ];

    $update->update($in, $data);
    return redirect('inView');
}



//Delete data
public function delete($in_id = null)
{
    $view = new InModel();
    $view->delete($in_id);
    return redirect('inView');
}

}
