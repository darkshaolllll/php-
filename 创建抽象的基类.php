<?php
abstract class database#抽象类可以被定义但不能被实现
{
    abstract public function connection();
    abstract public function query();
    abstract public function fetch();
    abstract public function close();
}
class mysql extends database
{
    protected $dbh;
    protected $query;
    public function connection();
}#全部实现
?>