<?php
 Class Post{
    public function show(){
        $conn = Db::getInstance();
        $statement= $conn->prepare("SELECT * FROM Post");
        $statement->execute();
        $posts = $statement -> fetchAll();
        return $posts;
    }
 }
?>