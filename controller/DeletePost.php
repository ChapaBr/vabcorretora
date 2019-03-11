<?php 
include('../model/Conn.php');
include('../model/PostModel.php');

$id = $_POST['id'];

$post = new PostModel();

$post->delete($id);

if($id != ""){
    header("Location: ../panel/listBlogs.php?postDelete=sucesso");
}else{
    header("Location: ../panel/listBlogs.php?postDelete=erro");
}