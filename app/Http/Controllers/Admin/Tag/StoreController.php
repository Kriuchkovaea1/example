<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) //вспомни про реквест
    {
        $data = $request->validated();
        Tag::firstOrCreate($data); //то же самое, что и снизу
       //Category::firstOrCreate(['title'=> $data['title']], ['title'=> $data['title']]); [проверяем по этому пункту],[если он не находит создает вот эти атрибуты]
        return redirect()->route('admin.tag.index');
    }
}
