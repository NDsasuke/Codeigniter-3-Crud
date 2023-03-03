<?php

class Studentmodel extends CI_Model
{
    private $student_id;
    private $name;
    private $address;
    private $email;
    private $phone;


    public function getStudent_id()
    {
        return $this->student_id;
    }


    public function setStudent_id($student_id)
    {
        $this->student_id = $student_id;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}
