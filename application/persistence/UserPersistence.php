<?php
defined("BASEPATH") or exit("El acceso directo al script no está permitido!!!");

class UserPersistence extends DataMapper
{
    public $table = "users";

    public $validation = array();
 

    // public function _encrypt($field)
    // {
    //     if (!empty($this->{$field})) {
    //         if (empty($this->salt)) {
    //             $this->salt = md5(uniqid(rand(), true));
    //         }
    //         $this->{$field} = sha1($this->salt . $this->{$field});
    //     }
    // }
}
