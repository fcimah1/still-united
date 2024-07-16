<?php
namespace App\Repository\Interface;
use App\DTO\AdminDTO;

    interface IAdminRepository 
    {
        public function getAll();
        public function getById(string $id);

        public function create(AdminDTO $data);

        public function update(AdminDTO $data, string $id);
        public function delete(string $id);
    }
