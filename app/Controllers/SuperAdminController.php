<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SuperAdminController extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        //
    }

    public function getGetRegencies()
    {
        echo "test";

        // $province_id    = $this->request->getVar('province_id');
        // $data           = $this->userModel->getAllCity($province_id);
        // echo json_encode($data);
    }
}
