<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\trait\ImageUpload;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageUpload;

    public function index()
    {
        return view("admin.categories",
            ["categories" => Category::paginate(5)]
        );
    }

    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        $category = Category::create($validatedData);
        $this->storeImg($category, $request->file('image'));
        return redirect()->back()->with("success", "category created successfully");
    }

    public function update(CategoryRequest $request, Category $category)
    {
//        dd($request);
        $validatedData = $request->validated();
        $category->update($validatedData);
        $this->storeImg($category, $request->file('image'));

        return redirect()->back()->with("success", "category updated successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with("success", "category deleted successfully");
    }
}
