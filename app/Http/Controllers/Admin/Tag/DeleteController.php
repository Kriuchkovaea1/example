<?php

namespace App\Http\Controllers\Admin\Tag;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;


class DeleteController extends Controller
{
    public function __invoke (Tag $tag): RedirectResponse
    {
        //$category=Category::withTrashed()->find(1);
        //$category->restore();
        $tag->delete();
        return redirect()->route('admin.tag.index');//то же, что и внизу
       // return view('admin.categories.index', compact('category'));
    }
}
