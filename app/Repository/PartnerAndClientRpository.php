<?php
    namespace App\Repository;

use App\DTO\PartnerAndClientDTO;
use App\Enums\Type;
use App\Models\PartnerAndClient;
use App\Repository\Interface\IPartnerAndClientRpository;
use Illuminate\Support\Facades\Storage;

class PartnerAndClientRpository implements IPartnerAndClientRpository
{
    public function getByType(Type $type)
    {
        return PartnerAndClient::where('type', '=', $type)->get();
    }

    public function getAll()
    {
        return PartnerAndClient::all();
    }

    public function getById(string $id)
    {
        return PartnerAndClient::findOrFail($id);
    }

    public function create(array $partnerAndClientDTO)
    {
        return PartnerAndClient::create($partnerAndClientDTO);
    }

    public function update(array $partnerAndClientDTO,string $id)
    {
        return PartnerAndClient::where('id', '=', $id)->update($partnerAndClientDTO);
    }

    public function delete(string $id)
    {
        $selected = PartnerAndClient::findOrFail($id);
        $photo = $selected->image;
        $image_path = public_path($photo);
        if (file_exists($image_path)) 
        {
            unlink($image_path);
        }
        return $selected->delete();
    }

}