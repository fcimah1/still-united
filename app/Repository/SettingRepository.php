<?php
    namespace App\Repository;

use App\Models\Setting;
use App\Repository\Interface\ISettingRepository;
    class SettingRepository implements ISettingRepository
    {
        public function getAll()
        {
            return Setting::all();
        }
        public function update(array $settingDTO, string $id)
        {
            return Setting::where('id', $id)->update($settingDTO);
        }
    }