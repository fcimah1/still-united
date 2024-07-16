<?php
namespace App\Repository;

use App\DTO\ContactDTO;
use App\Models\Contact;
use App\Repository\Interface\IContactRepository;
    class ContactRepository implements IContactRepository
    {
        public function getAll()
        {
            return Contact::all();
        }

        public function getById($id)
        {
        return Contact::findOrFail($id);
        }
        public function delete(string $id)
        {
            return Contact::where('id', $id)->delete();
        }
    }