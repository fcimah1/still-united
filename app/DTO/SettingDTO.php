<?php
namespace App\DTO;

use App\Http\Requests\SettingRequest;
use Spatie\LaravelData\Data;
Class SettingDTO extends Data
{

    public function __construct(public string $name, public string $description, public string $email,
                                public string $phone, public string $address, public string $logo,
                                public string $favicon, public string $facebook, public string $twitter,
                                public string $instagram, public string $whatsapp)
    {
    }

    public static function handleInput(SettingRequest $settingRequest)
    {
        $data = [

            'name' => $settingRequest->name,
            'description' => $settingRequest->description,
            'email' => $settingRequest->email,
            'phone' => $settingRequest->phone,
            'address' => $settingRequest->address,
            'facebook' => $settingRequest->facebook,
            'twitter' => $settingRequest->twitter,
            'instagram' => $settingRequest->instagram,
            'whatsapp' => $settingRequest->whatsapp,
        ];
        if($settingRequest->logo) {
            $logo = $settingRequest->logo;
            $logoImage = time() . $logo->getClientOriginalName();
            $logo->move(public_path('images/setting/logo/'), $logoImage);
            $data['logo'] = 'images/setting/logo/' . $logoImage;
        }
        if($settingRequest->favicon) {
            $favicon = $settingRequest->favicon;
            $faviconImage = time() . $favicon->getClientOriginalName();
            $favicon->move(public_path('images/setting/favicon/'), $faviconImage);
            $data['favicon'] = 'images/setting/favicon/' . $faviconImage;        
        }
        return $data;
    }
}
