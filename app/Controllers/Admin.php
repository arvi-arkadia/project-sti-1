<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Admin | ESTI';

        return view('\App\Views\admin\index', $data);
    }
    //--------------------------------------------------------------------

}
