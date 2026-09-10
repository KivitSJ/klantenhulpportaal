<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        Category::create($validated);

        return response()->json(['message' => 'Categorie succesvol opgeslagen'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): \Illuminate\Http\JsonResponse
    {
        $category->update($request->validated());

        return response()->json(['message' => 'category succesvol geupdated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): \Illuminate\Http\JsonResponse
    {
        if ($category->tickets()->exists()) {
            throw new HttpResponseException(response()->json([
                'message' => 'Deze categorie kan niet worden verwijderd omdat er nog tickets aan gekoppeld zijn.'
            ], 422));
        }
        $category->delete();
        return response()->json(['message' => 'Categorie succesvol verwijderd'], 200);
    }
}
