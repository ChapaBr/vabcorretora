<?php 
include('../model/Conn.php');
include('../model/PostModel.php');

$title = $_POST['title'];
$data = $_POST['data'];
$content = $_POST['content'];

// echo $content;

//upload
$uploaddir = '../uploads/';
$uploadfile = basename($_FILES['uploadFile']['name']);

$notCaracters = array("//", "/", "-", " - ","é","è","ê","à","á","â","ã","õ","ó","ö","ò","í","ì","ú","ù","ū","ñ", " ","(", ")");
$targetFile =  str_replace('//','/',$uploadfile) . $_FILES['uploadFile']['name'];
$name_url = str_replace($notCaracters, "", $uploadfile);

if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploaddir.$name_url)) {
    $url_image = "https://vabcorretora.camposwebsolutions.com.br/uploads/". $name_url; 
} else {
    return header('Location: ../panel/index.php?post=erroUpar');
}

$post = new PostModel();

$post->setTitle($title);
$post->setData($data);
$post->setContent($content);
$post->setLinkImage($url_image);
$post->create();

if($title != "" || $data != "" || $content != ""){
    header("Location: ../panel/index.php?post=sucesso");
}else{
    header("Location: ../panel/index.php?post=erro");
}