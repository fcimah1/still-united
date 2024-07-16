<?php

namespace App\Http\Controllers;

use App\DTO\TagDTO;
use App\Http\Requests\TagsRequest;
use App\Repository\Interface\ITagRepository;

class TagsController extends Controller
{
    private $tagRepository;

    public function __construct(ITagRepository $tagRepository)
    {
        $this->middleware('auth');

        $this->tagRepository = $tagRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = $this->tagRepository->getAll();
        return view('dashboard.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagsRequest $request)
    {
        $this->tagRepository->create(TagDTO::from($request->all()));
        return redirect()->route('tag.index');
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
        $tag = $this->tagRepository->getById($id);
        return view('dashboard.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsRequest $request, string $id)
    {
        $this->tagRepository->update(TagDTO::from($request->all()), $id);
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->tagRepository->delete($id);
        return redirect()->route('tag.index');
    }
}
