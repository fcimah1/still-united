<?php
    namespace App\Repository\Interface;

use App\DTO\PartnerAndClientDTO;
use App\Enums\Type;

    interface IPartnerAndClientRpository 
    {
        public function getByType(Type $type);
        public function getById(string $id);


        public function getAll();
        public function create(array $partnerAndClient);

        public function update(array $partnerAndClient, string $id);
        public function delete(string $id);
    }