<?php
     $conn = new mysqli('localhost', 'root', '', 'tutorinteligente');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>