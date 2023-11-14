<?php

namespace Controller;

use Traits\ResponseFormatter;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";


//DISIMULASIKAN INI ADALAH CLASS CONTROLLER PRODUCT
class ProductController extends Controller
{
  //gunakan trait yang sudah dibuat
  use ResponseFormatter;

  //MAGIC METHOD, Method ini akan diakses pada saat pembuatan object.
  public function _construct()
  {
    //SET ATRIBUT controllerName PADA PARENT CLAS CONTROLLER
    $this -> controllerName = "Get All Product";
    //SET ATRIBUT controllerMethod PADA PARENT CLAS CONTROLLER
    $this -> controllerMethod = "GET";
  }

  //DISIMULASIKAN INI METHOD UNTUK GET DATA PRODUCT
  public function getAllProduct()
  {
    //ARRAY DUMMY DATA
    $dummyData = [
      "Air Mineral",
      "Kebab",
      "Spagetti",
      "Jus Jambu"
    ];

    $response = [
      "controller_attribute" => $this -> getControllerAttribute(),
      "product" => $dummyData
    ];

    //gunakan method dari trait yang sudah dibuat
    return $this -> responseFormatter(200, "Success", $response);
  }
}
