<?php

use person as GlobalPerson;

class Adress{
    protected $city;
    public function setcity($city)
    {
        $this->city=$city;
    }
    public function getcity(){
        return $this->city;
    }

}
class person{
    protected $name;
    protected $adress;
    
    public function __construct()
    {
        $this->adress=new Adress;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function getname(){
        return $this->name;
    }
    public function __call($method, $arguments)
    {
        if(method_exists($this->adress,$method)){
            return call_user_func_array(
                array($this->adress,$method),$arguments
            );
        }
    }
}
$ra=new person;
$ra->setname('sad');
$ra->setcity('nenn');
print $ra->getname().'lives in'.$ra->getcity().'.';
?>