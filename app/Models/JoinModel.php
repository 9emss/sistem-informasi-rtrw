<?php

namespace App\Models;

use CodeIgniter\Model;

class JoinModel extends Model
{

    protected $table = 'users';
    protected $primaryKey     = 'id';
    protected $allowedFields  = [
        'token', 'nik', 'fullname', 'phone', 'address', 'avatar', 'province', 'city', 'zip_code', 'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];


    public function getProfile($username)
    {
        return $this->db->table('users')
            ->select('users.id as userid, username, email, auth_groups.name as role, auth_groups.id as roleId, fullname, nik, phone, avatar, address, zip_code as zip, reg_provinces.id as provinceId, reg_regencies.name as city, reg_regencies.id as cityId, reg_provinces.name as province')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->join('reg_provinces', 'reg_provinces.id = users.province')
            ->join('reg_regencies', 'reg_regencies.id = users.city')
            ->orderBy('userid', 'ASC')
            ->where(['username' => $username])
            ->get()
            ->getRowArray();
    }

    public function getAllProvince()
    {
        return $this->db->table('reg_provinces')
            ->orderBy('name', 'ASC')
            ->get()
            ->getResult();
    }

    public function getAllCity($province_id)
    {
        return $this->db->table('reg_regencies')
            ->orderBy('province_id', 'ASC')
            ->where('province_id', $province_id)
            ->get()
            ->getResult();
    }

    public function updateUser($username, $data)
    {
        return $this->db->table('users')
            ->select('username, email, auth_groups.name as role, auth_groups.id as roleId, fullname, nik, phone, avatar, address, zip_code as zip, reg_provinces.id as provinceId, reg_regencies.name as city, reg_regencies.id as cityId, reg_provinces.name as province')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->join('reg_provinces', 'reg_provinces.id = users.province')
            ->join('reg_regencies', 'reg_regencies.id = users.city')
            ->where(['username' => $username])
            ->update($data);
    }
}
