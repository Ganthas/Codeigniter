<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usercontroller extends CI_Controller
{

    public function index()
    {
        try {

            $user = new UserDomain();
            $user->setUsername('username');
            $user->setEmail('correo');

            UserWrapper::saveUser($user);

        } catch (Exception $e) {
            throw new Exception($e);
        }

        $this->load->view('welcome_message');
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

        $this->load->view('welcome_message');
    }
}
