<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user) //вспомни про реквест посмотри public function authorize() и исправь на true, есть переменная в роуте. здесь тоже нужна переменнная
    {
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
