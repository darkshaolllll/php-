<?php
class person{
    protected $name;
    protected $email;
    public function setname($name)
    {
        $this->name=$name;
    }
    public function setmain($mail)
    {
        $this->email=$mail;
    }
    public function __toString()
    {
        return "$this->name <$this->email>";
    }
}
$rename=new person;
$rename->setname('rasmus lerdorf');
$rename->setmain('5245555#');
echo ($rename);
?>