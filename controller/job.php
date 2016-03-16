<?php
 class mytest{
  private static $instance;
  public static function $get_instance(){
   
    if(empty(self::instance)){
      self::instance = new self();   
     }
    return self::instacne;
  }
  public function getInfo(){
  return array('key'=>1);
  }

}
