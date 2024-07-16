<?php
    namespace App\Repository\Interface;

use App\DTO\TagDTO;
use App\Models\Tags;

    interface ITagRepository 
    {
        public function getAll();

        public function getById(string $id);

        public function create(TagDTO $data);

        public function update(TagDTO $data, string $id);

        public function delete(string $id);

    }