<?php
    namespace App\Repository;

use App\DTO\RequestAQuoteDTO;
use App\Models\RequestAQuote;
use App\Repository\Interface\IRequestAQuoteRepository;
class RequestAQuoteRepository implements IRequestAQuoteRepository
{
    public function create(RequestAQuoteDTO $data)
    {
        return RequestAQuote::create($data->toArray());
    }


    public function getAll()
    {
        return RequestAQuote::all();
    }

    public function getById(string $id)
    {
        return RequestAQuote::findOrFail($id);
    }
    public function update(RequestAQuoteDTO $data, string $id)
    {
        return RequestAQuote::where('id', $id)->update($data->toArray());
    }

    public function delete(string $id)
    {
        return RequestAQuote::where('id', $id)->delete();
    }
}