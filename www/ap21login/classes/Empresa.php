<?php
class Empresa
{
    protected $id;
    protected $company;
    protected $investment;
    protected $date;
    protected $active;

    public function __construct($id, $company, $investment, $date, $active)
    {
        $this->id = $id;
        $this->company = $company;
        $this->investment = $investment;
        $this->date = $date;
        $this->setActive($active);
    }
    public function isVIP()
    {
        return $this->investment >= 1000000;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getInvestment()
    {
        return $this->investment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = false;
        if ($active === 1 || $active === true || strtolower($active) === "true") $this->active = true;
        return $this;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    

    /**
     * Set the value of company
     */
    public function setCompany($company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Set the value of investment
     */
    public function setInvestment($investment): self
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}
?>