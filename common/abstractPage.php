<?php

abstract class AbstractPage
{
  protected $data = array();

  abstract protected function main();

  public function exec()
  {
    ini_set('log_errors', 'on');
    ini_set('error_log', 'php.log');
    
    try{
      $this->main();
    } catch (Exception $e) {
      exit('エラーが発生しました。');
    }
  }

  public function getData($key = null){
    if(null == $key){
      return $this->data;
    }else{
      return $this->data[$key];
    }
  }
}

?>