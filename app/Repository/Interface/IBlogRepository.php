<?php
    namespace App\Repository\Interface;

use App\DTO\BlogsTagsDTO;

    interface IBlogRepository 
    {
        public function getAll();
        public function create(array $data, BlogsTagsDTO $tags);
        public function getBlogTags(string $id);
        public function getById(string $id);
        public function update(array $data, BlogsTagsDTO $tags , string $id);
        public function delete(string $id);
    }
