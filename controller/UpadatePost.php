<?php 
include('../model/Conn.php');
include('../model/PostModel.php');

$id = $_POST['id'];
$title = $_POST['title'];
$data = $_POST['data'];
$content = $_POST['content'];
$url_image = $_POST['uploadFile'];


//upload
$uploaddir = '../uploads/';
$uploadfile = basename($_FILES['uploadFile']['name']);

$notCaracters = array("//", "/", "-", " - ","é","è","ê","à","á","â","ã","õ","ó","ö","ò","í","ì","ú","ù","ū","ñ", " ","(", ")");
$targetFile =  str_replace('//','/',$uploadfile) . $_FILES['uploadFile']['name'];
$name_url = str_replace($notCaracters, "", $uploadfile);

if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploaddir.$name_url)) {
    $url_image = "https://vabcorretora.camposwebsolutions.com.br/uploads/". $name_url; 
}

//echo $id.'<br>'.$title.'<br>'.$data.'<br>'.$content.'<br>'.$url_image;

$post = new PostModel();

$post->setTitle($title);
$post->setData($data);
$post->setContent($content);
$post->setLinkImage($url_image);
$post->update($id);

if($title != "" || $data != "" || $content != ""){
    header("Location: ../panel/listBlogs.php?post=sucesso");
}else{
    header("Location: ../panel/listBlogs.php?post=erro");
}