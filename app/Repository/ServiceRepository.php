<?php
    namespace App\Repository;

use App\Models\Service;
use App\Repository\Interface\IServiceRepository;
    class ServiceRepository implements IServiceRepository
    {
        public function getAll()
        {
            return Service::all();
        }
        public function getById(string $id)
        {
            return Service::findOrFail($id);
        }
        public function create(array $data)
        {
            return Service::create($data);
        }
        public function update (array $data, string $id)
        {
            return Service::where('id', $id)->update($data);
        }
        public function delete(string $id)
        {
            $selected = Service::findOrFail($id);
            $photo = $selected->image;
            $image_path = public_path($photo);
            if (file_exists($image_path)) 
            {
                unlink($image_path);
            }
            $selected->delete();
            return true;
        }
    }