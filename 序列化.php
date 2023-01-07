<?php
class logfile{
    protected $filename;
    protected $handle;
    public function __construct($filename)
    {
        $this->filename=$filename;
        $this->open();        
    }
    private function open(){
        $this->handle=fopen($this->filenaem,'a');
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
    public function __sleep()
    {
        return array('filename');
    }
    public function __wakeup()
    {
        $this->open;
    }
}
?>