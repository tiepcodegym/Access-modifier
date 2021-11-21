<?php

class user
{
    public $name;
    public $email;
    public $role;

    public function __construct($role, $name, $email)
    {
        $this->role = $role;
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo()
    {
        echo 'Name :' . $this->name . '<br>';
        echo 'Email :' . $this->email . '<br>';
        echo 'Role :' . $this->role . '<br>';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function isAdmin()
    {
        if ($this->role==1){
            return 'admin';
        }else{
            return 'Người dùng bình thường';
        }
    }

}
