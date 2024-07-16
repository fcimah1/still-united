<?php
namespace App\Repository\Interface;

use App\DTO\SettingDTO;

interface ISettingRepository
{
    public function getAll();
    public function update(array $settingDTO, string $id);
}