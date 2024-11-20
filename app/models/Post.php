<?php

namespace app\models;

use app\models\Model;

class Post extends Model {

    public function getAllPosts() {
        $query = "SELECT * FROM posts";
        return $this->fetchAll($query);
    }

    public function getPostById($id) {
        $query = "SELECT * FROM posts WHERE id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id]);
    }

    public function getAllPostsByTitle($title) {
        $query = "SELECT * FROM posts WHERE title LIKE :title";
        return $this->fetchAllWithParams($query, ['title' => '%' . $title . '%']);
    }

    public function savePost($inputData) {
        $query = "INSERT INTO posts (title, body) VALUES (:title, :body)";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function updatePost($inputData) {
        $query = "UPDATE posts SET title = :title, body = :body WHERE id = :id";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function deletePost($inputData) {
        $query = "DELETE FROM posts WHERE id = :id";
        return $this->fetchAllWithParams($query, $inputData);
    }
}