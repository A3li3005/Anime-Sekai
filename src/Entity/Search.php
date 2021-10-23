<?php 

namespace App\Entity;

class Search 
{

   
    private $format;

    private $releaseDate;


    public function setFormat($format){
        
        $this->format = $format;

        return $this;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }


    public function getReleaseDate()
    {
        
        return $this->releaseDate;
    }


    // public function __toString() {
    //     return $this->getReleaseDate();
    // }
 


}