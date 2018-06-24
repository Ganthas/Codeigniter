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
            $estado = $userPersistence->save();

        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

}
