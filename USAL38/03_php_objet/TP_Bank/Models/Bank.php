<?php 


class Bank 
{
    private int $bank_id;

    private string $bank_name;

    public function __construct($name)
    {
        $this->bank_name = $name;
    }

    public function getBankName()
    {
        return $this->bank_name;
    }

}