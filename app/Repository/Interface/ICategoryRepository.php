<?php
    namespace App\Repository\Interface;

use App\DTO\CategoryDTO;

    interface ICategoryRepository 
    {
        
        public function getAll();
        public function getById(string $id);
        public function create(CategoryDTO $data);
        public function update(CategoryDTO $data, string $id);
        public function delete(string $id);
    }
