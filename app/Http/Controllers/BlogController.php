<?php

namespace App\Http\Controllers;

use App\DTO\BlogDTO;
use App\DTO\BlogsTagsDTO;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use App\Repository\Interface\IBlogRepository;
use App\Repository\Interface\ICategoryRepository;
use App\Repository\Interface\ITagRepository;

class BlogController extends Controller
{
    private $blogRepository;
    private $categoryRepository;
    private $tagRepository;

    public function __construct(IBlogRepository $blogRepository,ICategoryRepository $categoryRepository,
                                ITagRepository $tagRepository,)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
        $this->blogRepository = $blogRepository;
        $this->tagRepository = $tagRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = $this->blogRepository->getAll();
        return view('dashboard.blogs.index', ['blogs' => $blogs]);
        // $this->blogRepository->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        $tags = $this->tagRepository->getAll();
        return view('dashboard.blogs.create', ['categories' => $categories, 'tags' => $tags]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $this->blogRepository->create(BlogDTO::handleData($request),BlogsTagsDTO::from($request->all()));
        
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $blog = $this->blogRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        $tags = $this->tagRepository->getAll();
        $selectedTags = $this->blogRepository->getBlogTags($id);
        $selectedTagsInArray = [];
        foreach( $selectedTags as $tag){
            $selectedTagsInArray[] = $tag->tag_id;
        }
        
        return view('dashboard.blogs.edit', [
            'blog' => $blog ,
            'categories' => $categories, 
            'tags' => $tags,
            'selectedTags' => $selectedTagsInArray
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {   
        $this->blogRepository->update(BlogDTO::handleData($request), BlogsTagsDTO::from($request->all()), $id);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {    
        $this->blogRepository->delete($id);
        return redirect()->route('blog.index');
    }
}
