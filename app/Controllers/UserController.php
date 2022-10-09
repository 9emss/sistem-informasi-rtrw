<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JoinModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\I18n\Time;

class UserController extends BaseController
{

    use ResponseTrait;

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new JoinModel();
    }

    public function profile($username)
    {
        //
        $data = [
            'title' => user()->fullname . ' Profile - SIRT | Gemsscode',
            'user'  => $this->userModel->getProfile($username),
            'param' => 'profparam'
        ];
        // dd($data['user']);

        if (empty($data['user'])) {
            return redirect()->to('/dashboard');
        }

        if ($data['user']['username'] !== user()->username) {
            return redirect()->to('/dashboard');
        }


        return view('dashboard/user/profile', $data);
    }

    public function editProfile($username)
    {
        $data = [
            'title' => user()->fullname . ' Profile - SIRT | Gemsscode',
            'user'  => $this->userModel->getProfile($username),
            'validation' => \Config\Services::validation(),
            'province'  => $this->userModel->getAllProvince(),
            'param' => 'profparam'
        ];
        // dd($data['province']);

        if (empty($data['user'])) {
            return redirect()->to('/dashboard');
        }

        if ($data['user']['username'] !== user()->username) {
            return redirect()->to('/dashboard');
        }


        return view('dashboard/user/editProfile', $data);
    }

    public function updateProfile($username = '')
    {

        $fileImg = $this->request->getFile('foto');

        // dd($fileImg);

        if ($fileImg->getError() == 4) {
            $namaImg = $this->request->getVar('gambarLama');
        } else {
            $namaImg = $fileImg->getRandomName();

            $fileImg->move('assets/img', $namaImg);

            if (user()->avatar != 'default.png') {
                unlink('assets/img' . $this->request->getVar('gambarLama'));
            }
        }

        $data = [
            'fullname'  => $this->request->getVar('fullname'),
            'zip_code'  => $this->request->getVar('zip'),
            'phone'     => $this->request->getVar('phone'),
            'address'   => $this->request->getVar('address'),
            'city'      => $this->request->getVar('city'),
            'province'  => $this->request->getVar('province'),
            'avatar'    => $namaImg,
            'updated_at'  => Time::now('Asia/Jakarta', 'en_US'),
        ];

        // dd($data);


        $save = $this->userModel->updateUser($username, $data);

        return redirect()->to('/dashboard');
    }

    public function regencies($province_id = 0)
    {
        // echo "test";

        $province_id    = $this->request->getVar('province_id');
        $data           = $this->userModel->getAllCity($province_id);
        echo json_encode($data);
    }
}
