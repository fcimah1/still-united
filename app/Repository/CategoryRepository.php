<?php
    namespace App\Repository;

use App\DTO\CategoryDTO;
use App\Models\Category;
use App\Repository\Interface\ICategoryRepository;
    class CategoryRepository implements ICategoryRepository
    {
        public function getAll()
        {
            return Category::all();
        }
        public function getById($id)
        {
            return Category::findOrFail($id);
        }
        public function create(CategoryDTO $data)
        {
            return Category::create($data->toArray());
        }
        public function update(CategoryDTO $data, string $id)
        {
            return Category::findOrFail($id)->update($data->toArray());
        }
        public function delete(string $id)
        {
            return Category::findOrFail($id)->delete();
        }

    }