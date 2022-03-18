<?php

namespace App\Models;

/** Encapsulate `donners` table records. */
class Donner 
{
    /** @var int */
    private $id;

    /** @var string */
    private $full_name;

    /** @var string */
    private $phone_number;

  

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of full_name
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set the value of full_name
     *
     * @return  self
     */
    public function setFullName($full_name)
    {
        $this->full_name = $full_name;

        return $this;
    }

    /**
     * Get the value of phone_number
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }
}