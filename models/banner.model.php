<?php
  namespace Banner;
  class Model {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->id = $GLOBALS['catalog_id'] ?? null;
  }

  function getBanner(){
    global $mysqli;
    $query = "SELECT title, description, image_name, link, visible, type, alt, mask from banner where type='store' and visible='1';";
    $result = $this->mysqli->query($query);
    $banner = $result->fetch_assoc();
    return $banner;
  }

  public function getEverything(){
    $description = $this->getBanner();
    return ['description'=>$description];
  }
}
?>