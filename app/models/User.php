<?php

class User{

    private $uid;
    private $email;
    private $name;
    private $surname;
    private $hashpass;

    /**
     * User constructor.
     * @param $uid
     * @param $email
     * @param $name
     * @param $surname
     * @param $hashpass
     */
    public function __construct($email, $name, $surname, $hashpass)
    {
        $this->uid = null;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->hashpass = $hashpass;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     *
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getHashpass()
    {
        return $this->hashpass;
    }

    /**
     * @param mixed $hashpass
     */
    public function setHashpass($hashpass)
    {
        $this->hashpass = $hashpass;
    }



}
