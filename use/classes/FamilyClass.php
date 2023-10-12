<?php

class FamilyClass 
{
    private $boy;
    private $girl;

    public function setNameBoy($boy){
        $this->boy = $boy;
    }

    public function setNameGirl($girl){
        $this->girl = $girl;
    }

    public function getNameBoy(){
        return $this->boy;
    }

    public function getNameGirl(){
        return $this->girl;
    }

    public function friends(){
        return $this->getNameBoy() . ' and ' . $this->getNameGirl() . ' = Friends!';

    }   

}






?>