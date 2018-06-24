<?php

class UserDomain
{
    public $username;
    public $email;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}