<?php

namespace App\Http\Controllers\Admin\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post) //вспомни про реквест посмотри public function authorize() и исправь на true, есть переменная в роуте. здесь тоже нужна переменнная
    {
        $data = $request->validated();
        $post = $this->service->update($post, $data);
        return view('admin.post.show', compact('post'));

    }
}
