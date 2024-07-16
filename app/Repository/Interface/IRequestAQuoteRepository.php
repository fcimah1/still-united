<?php
    namespace App\Repository\Interface;

use App\DTO\RequestAQuoteDTO;

    interface IRequestAQuoteRepository 
    {                
        public function create(RequestAQuoteDTO $data);
        public function getAll();
        public function getById(string $id);


        public function update(RequestAQuoteDTO $data, string $id);
        public function delete(string $id);

    }
