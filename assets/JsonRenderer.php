<?php



class JsonRenderer {
  private $data;
  private $form;
  private $render;
  
  /**
   * @return mixed
   */
  public function toForm($data, $form) {
  
  }
  
  /**
   * @return mixed
   */
  public function jsonToHtmlForm($data, $form) {
  
  }
  
  public function jsonToArray($json) {
    return json_decode($json, TRUE);
  }
  
  public function jsonToHtml($json) {
  
  }
}