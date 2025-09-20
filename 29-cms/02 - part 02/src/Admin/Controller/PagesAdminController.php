<?php

namespace App\Admin\Controller;

class PagesAdminController extends AbstractAdminController{

    public function index(){
        $this->render('pages/index',[]);
    }
}