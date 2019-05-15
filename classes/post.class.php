<?php
 Class Post{
    public function show(){
        $conn = Db::getInstance();
        $statement= $conn->prepare("SELECT * FROM images");
        $statement->execute();
        $posts = $statement -> fetchAll();
        return $posts;
    }
 }//
?>