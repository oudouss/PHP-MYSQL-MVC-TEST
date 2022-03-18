<?php

namespace App\Models;

/** Encapsulate `donations` table records. */
class Donation
{
    /** @var int */
    private $id;

    /** @var string */
    private $don_name;
    
    /** @var string */
    private $don_type;
    
    /**
     * @var Donner
     */
    private $donner;


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
     * Get the value of don_name
     */
    public function getDonName()
    {
        return $this->don_name;
    }

    /**
     * Set the value of don_name
     *
     * @return  self
     */
    public function setDonName($don_name)
    {
        $this->don_name = $don_name;

        return $this;
    }

    /**
     * Get the value of don_type
     */
    public function getDonType()
    {
        return $this->don_type;
    }

    /**
     * Set the value of don_type
     *
     * @return  self
     */
    public function setDonType($don_type)
    {
        $this->don_type = $don_type;

        return $this;
    }

    /**
     * Get the value of donner
     *
     * @return  Donner
     */
    public function getDonner()
    {
        return $this->donner;
    }

    /**
     * Set the value of donner
     *
     * @param  Donner  $donner
     *
     * @return  self
     */
    public function setDonner(Donner $donner)
    {
        $this->donner = $donner;

        return $this;
    }
}