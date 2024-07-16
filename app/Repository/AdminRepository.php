<?php
namespace App\Repository;
use App\DTO\AdminDTO;
use App\Models\Admin;
use App\Repository\Interface\IAdminRepository;
    class AdminRepository implements IAdminRepository
    {
        public function getAll()
        {
            return Admin::all();
        }
        public function getById(string $id)
        {
            return Admin::findOrFail($id);
        }

        public function create(AdminDTO $data)
        {
            return Admin::create($data->toArray());
        }

        public function update(AdminDTO $data, string $id)
        {
            return Admin::where('id', $id)->update($data->toArray());
        }
        public function delete(string $id)
        {
            return Admin::where('id', $id)->delete();
        }
    }