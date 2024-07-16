<?php
namespace App\Repository\Interface;

interface IContactRepository 
{
    public function getAll();
    public function getById(string $id);
    public function delete(string $id);
}
