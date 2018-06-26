<?php 

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Usercontroller extends CI_Controller
{
    public function index()
    {
        try {
            $data['users'] = UserWrapper::getAllUsers();
        } catch (Exception $e) {
            throw new Exception($e);
        }

        $this->layout->view('welcome_message');
    }

    public function guardar()
    {
        try {
            $user = new UserDomain();
            $user->setUsername('username');
            $user->setEmail('correo');
            UserWrapper::saveUser($user);
        } catch (Exception $e) {
            throw new Exception($e);
        }

        $this->layout->view('welcome_message');
    }
}
