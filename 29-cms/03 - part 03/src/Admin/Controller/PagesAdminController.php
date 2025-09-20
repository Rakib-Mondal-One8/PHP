<?php

namespace App\Admin\Controller;

use App\Repository\PagesRepository;

class PagesAdminController extends AbstractAdminController{

    public function __construct(private PagesRepository $pagesRepository)
    {
        
    }

    public function index(){
        $Info = $this->pagesRepository->fetchInfo();
        $this->render('pages/index',[
            'info' => $Info
        ]);
    }
}