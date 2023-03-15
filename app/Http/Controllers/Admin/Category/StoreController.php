<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) //вспомни про реквест
    {
        $data = $request->validated();
        Category::firstOrCreate($data); //то же самое, что и снизу
       //Category::firstOrCreate(['title'=> $data['title']], ['title'=> $data['title']]); [проверяем по этому пункту],[если он не находит создает вот эти атрибуты]
        return redirect()->route('admin.category.index');
    }
}
