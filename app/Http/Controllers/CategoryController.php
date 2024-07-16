<?php

namespace App\Http\Controllers;

use App\DTO\CategoryDTO;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Repository\Interface\ICategoryRepository;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(ICategoryRepository $category)
    {
        $this->middleware('auth');

        $this->categoryRepository = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->create(CategoryDTO::from($request->all()));
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $this->categoryRepository->update(CategoryDTO::from($request->all()), $id);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->back();
    }
}
