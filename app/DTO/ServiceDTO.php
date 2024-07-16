<?php
namespace App\DTO;

use App\Http\Requests\ServiceRequest;
use Spatie\LaravelData\Data;

class ServiceDTO extends Data
{
    public function __construct(public string $name, public string $shortDescription, public string $longDescription, public string $image)
    {
        
    }
    public static function handleData(ServiceRequest $serviceRequest)
    {
        $data = [
            'name' => $serviceRequest->name,
            'short_desc' => $serviceRequest->short_desc,
            'long_desc' => $serviceRequest->long_desc,
        ];
        if ($serviceRequest->image) {
            $image = $serviceRequest->image;
            $newImageName = time() . $image->getClientOriginalName();
            $image->move('images/services/', $newImageName);
            $data['image'] = 'images/services/' . $newImageName;
        }
        return $data;
    }
}