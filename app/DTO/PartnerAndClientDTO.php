<?php
namespace App\DTO;

use App\Http\Requests\PartnerAndClientRequest;
use Spatie\LaravelData\Data;
Class PartnerAndClientDTO extends Data
{
    public function __construct(public string $name, public string $type,public string $image)
    {
    }

    public static function handleData(PartnerAndClientRequest $partnerAndClientRequest):array
    {
        $data =  [
            'name' => $partnerAndClientRequest->name,
            'type' => $partnerAndClientRequest->type,
        ];
        
        if ($partnerAndClientRequest->image) {
            $image = $partnerAndClientRequest->image;
            $newImageName = time() . $image->getClientOriginalName();
            $image->move('images/partnerOrClientImages/', $newImageName);
            $data['image'] = 'images/partnerOrClientImages/' . $newImageName;
        }
        return $data;
    }
}
