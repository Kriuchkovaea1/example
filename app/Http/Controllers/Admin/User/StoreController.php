<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) //вспомни про реквест
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email' => $data['email']], $data); //обозначаем по какому признаку будем делать firstorcreate
       //Category::firstOrCreate(['title'=> $data['title']], ['title'=> $data['title']]); [проверяем по этому пункту],[если он не находит создает вот эти атрибуты]
        return redirect()->route('admin.user.index');
    }
}
