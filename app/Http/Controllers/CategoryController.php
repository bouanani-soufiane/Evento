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
        $categories = Category::orderBy('id', 'asc')->paginate(5);
        return view("admin.categories", compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $category = Category::create($validatedData);
            $this->storeImg($category, $request->file('image'));

            return redirect()->back()->with("success", "Catégorie créée avec succès.");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur imprévue s'est produite!.");
        }
    }

    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $validatedData = $request->validated();
            $category->update($validatedData);
            $this->updateImg($category, $request->file('image'));

            return redirect()->back()->with("success", "Catégorie mise à jour avec succès!.");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la mise à jour de la catégorie!.");
        }
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->back()->with("success", "Catégorie supprimée avec succès!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la suppression de la catégorie!.");
        }
    }

}
