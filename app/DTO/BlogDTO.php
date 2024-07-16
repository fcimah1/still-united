<?php
namespace App\DTO;

use App\Http\Requests\BlogRequest;
use Spatie\LaravelData\Data;
Class BlogDTO extends Data
{
    public function __construct(public $category_id, public $name, public $short_desc, public $long_desc, public $image)
    {
    }
    public static function handleData(BlogRequest $blogRequest)
    {
        $data =  [
            'name' => $blogRequest->name,
            'short_desc' => $blogRequest->short_desc,
            'long_desc' => $blogRequest->long_desc,
            'category_id' => $blogRequest->category_id,
        ];
        if ($blogRequest->image) {
            $image = $blogRequest->image;
            $newImageName = time() . $image->getClientOriginalName();
            $image->move('images/blogs/', $newImageName);
            $data['image'] = 'images/blogs/' . $newImageName;
        }
        return $data;
    }

}