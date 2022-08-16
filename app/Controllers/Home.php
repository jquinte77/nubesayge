<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        $menu = $this->menuModel->setMenu();
        $data['menu'] = json_decode($menu, TRUE);
        return  view('plantilla/navbar',$data)
                .view('plantilla/aside')
                .view('plantilla/content')
                .view('plantilla/footer');
    }
}
