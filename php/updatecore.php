<?php 
if(!empty($_POST['semester'])){
     foreach($_POST['semester'] as $idd){
        if (!($idd == "")) {
         $arr = explode (", ", $idd);
            echo var_dump($arr);
        };
     }
   }



 if(!empty($_POST['count'])){
     foreach($_POST['count'] as $id){
        echo $id;
           echo "<br>";
           echo "<br>";
           echo "<br>";
     }
   }
