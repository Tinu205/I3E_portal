<?php
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/I3E_portal/templates/$name.php";
        // print($_SERVER['DOCUMENT_ROOT']."/I3E_portal/libs/templates/$name.php");
    }
?>
