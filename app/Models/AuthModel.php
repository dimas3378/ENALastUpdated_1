<?php
namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'idUsers';
    protected $allowedFields = ['uidUsers', 'emailUsers', 'pwdUsers','jabatan'];
    public function getAllUsers()
    {
        return $this->findAll();
    }
    public function getUsersByUsersid($emailUsers)
    {
        return $this->where('emailUsers', $emailUsers)->first();
    }
    public function getUsersByUsersuid($uid)
    {
        return $this->where('uidUsers', $uid)->first();
    }
    public function writeUserData($data)
    {
        return $this->insert($data);
    }
    public function updateData($id, $data)
    {
        return $this->where('uidUsers',$id)->set($data)->update();
    }
    public function deleteData($id)
    {
        return $this->delete($id);
    }
}
?>