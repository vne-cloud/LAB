<?php namespace Step;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }
    public static function log(String $str){
        self::Instance()->_log($str);
	}
    
    public function _write(){
        
        foreach($this->log as $value){
            echo $value."\n";
        }
        
    }
    
    public static function write(){
        self::Instance()->_write();
    }

}

?>