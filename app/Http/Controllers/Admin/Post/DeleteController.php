<?php

namespace App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;


class DeleteController extends BaseController
{
    public function __invoke (Post $post): RedirectResponse
    {
        //$category=Category::withTrashed()->find(1);
        //$category->restore();
        $post->delete();
        return redirect()->route('admin.post.index');//то же, что и внизу
       // return view('admin.categories.index', compact('category'));
    }
}
