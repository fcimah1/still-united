<?php
    namespace App\Repository;

use App\DTO\TagDTO;
use App\Models\Tags;
use App\Repository\Interface\ITagRepository;
    class TagRepository implements ITagRepository
    {
        public function getAll()
        {
            return Tags::all();
        }

        public function create(TagDTO $data)
        {
        return Tags::create($data->toArray());
        }

        public function update(TagDTO $data, string $id)
        {
            return Tags::where('id', $id)->update($data->toArray());
        }

        public function delete(string $id)
        {
            return Tags::where('id', $id)->delete();
        }

        public function getById(string $id)
        {
            return Tags::find($id);
        }
    }