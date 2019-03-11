<?php 

session_start();
if(session_destroy()){
    header("Location: ../");
}else{
    echo "nao foi possivel fazzer isso";
}