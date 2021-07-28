<?php

class Team
{
    private string $name = "";
    private string $country = "";


    public function __construct(string $name, string $country=NULL)
    {
        $this->name = $name;
        if($country != NULL)
        $this->country = $country;

        return $this;
    }
    
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
        
    }

    function printTeam()
    {
        print($this ->name . " (" . $this ->country . ")" /*. "\n"*/);
        //print($this ->country."\n");
    }
}


