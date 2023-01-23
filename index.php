<?php
     require_once "vendor/autoload.php";
     use Utils\Data as UtilData;
     use App\Data as AppData;

     // $data = new Data();
     // echo $data->message();

     $util = new UtilData();
     echo $util->message();
     $app = new AppData();
     echo $app->message();
?>