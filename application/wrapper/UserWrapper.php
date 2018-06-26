<?php
defined("BASEPATH") or exit("El acceso directo al script no está permitido!!!");

class UserWrapper
{

    public static function saveUser(UserDomain $user)
    {
        try {

            $userPersistence = new UserPersistence();
            $userPersistence->username = $user->username;
            $userPersistence->email = $user->email;
            $userPersistence->create = date('Y-m-d');
            $estado = $userPersistence->save();

        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public static function allUsers()
    {
        try {

            $userPersistence = new UserPersistence();
            $todos = $userPersistence->select();
            foreach($todos as $aux){
                Utils::debugArray($aux);

            }
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

}
