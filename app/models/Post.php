<?php

namespace app\models;

use app\models\Model;

class Post extends Model {

    public function getPostById($id) {
        $query = "select * from posts WHERE id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id]);
    }

    public function getAllPosts() {
        $query = "select * from posts";
        return $this->fetchAll($query);
    }

    public function getAllPostsByTitle($title) {
        $query = "select * from posts WHERE title LIKE :title";
        return $this->fetchAllWithParams($query, ['title' => '%' . $title . '%']);
    }

    public function savePost($inputData) {
        $query = "insert into posts (title, content) VALUES (:title, :content)";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function updatePost($inputData) {
        $query = "update posts set title = :title, content = :content WHERE id = :id";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function deletePost($inputData) {
        $query = "DELETE FROM posts WHERE id = :id";
        return $this->fetchAllWithParams($query, $inputData);
    }
}