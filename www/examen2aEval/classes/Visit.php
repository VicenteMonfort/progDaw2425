<?php

/**
 * Class to represent a visit
 */
class Visit
{
    protected $id;
    protected $name;
    protected $bill;
    protected $date;
    protected $paid;

    public function __construct($id, $name, $bill, $date, $paid)
    {
        $this->id = $id;
        $this->name = $name;
        $this->bill = $bill;
        $this->date = $date;
        $this->setPaid($paid);
    }
    public function isVIP()
    {
        return $this->bill >= 250;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBill()
    {
        return $this->bill;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function setPaid($paid)
    {
        $this->paid = false;
        if ($paid === 1 || $paid === true || strtolower($paid) === "true") $this->paid = true;
        return $this;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setBill($bill): self
    {
        $this->bill = $bill;

        return $this;
    }

    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}
?>