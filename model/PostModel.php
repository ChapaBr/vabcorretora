<?php

class PostModel extends Conn{
    private $title, $data, $content, $linkImage;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getLinkImage()
    {
        return $this->linkImage;
    }

    public function setLinkImage($linkImage)
    {
         $this->linkImage = $linkImage;
        return $this;
    }

    public function listLastPost(){
        $sql = new Conn();
        return $sql->select("SELECT * FROM tb_blog WHERE deleted != '1' OR deleted IS NULL OR deleted = '2' ORDER BY 'desc' LIMIT 3");
    }

    public function listOnePost($id){
        $sql = new Conn();
        return $sql->select("SELECT * FROM tb_blog WHERE id_blog = '{$id}'");
    }

    public function list()
    {
        $sql = new Conn();
        return $sql->select("SELECT * FROM tb_blog WHERE deleted != '1' OR deleted IS NULL OR deleted = '2'");
    }

    public function create()
    {
        $sql = new Conn();
        
        $sql->select("INSERT INTO tb_blog (title_blog, data_blog, content_blog, link_image) VALUES (:title, :datas, :content, :link)", 
            [
                ":title" => $this->getTitle(), 
                ":datas" => $this->getData(),
                ":content" => $this->getContent(),
                ":link" => $this->getLinkImage()
            ]);
    }

    public function update($id)
    {
        $sql = new Conn();
        
        $sql->select("UPDATE tb_blog SET title_blog = :title, data_blog = :datas, content_blog = :content, link_image = :link WHERE id_blog = '{$id}'", 
            [
                ":title" => $this->getTitle(), 
                ":datas" => $this->getData(),
                ":content" => $this->getContent(),
                ":link" => $this->getLinkImage()
            ]);
    }

    public function delete($id)
    {   
        $sql = new Conn();
        
        $sql->select("UPDATE tb_blog SET deleted = :deleted WHERE id_blog = '{$id}'", 
            [
                ":deleted" => 1
            ]);
    }
}