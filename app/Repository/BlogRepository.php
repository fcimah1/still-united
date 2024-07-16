<?php
    namespace App\Repository;

use App\DTO\BlogsTagsDTO;
use App\Models\Blog;
use App\Models\BlogTags;
use App\Repository\Interface\IBlogRepository;
    class BlogRepository implements IBlogRepository
    {
        public function getAll()
        {
            return Blog::select('blogs.*','categories.name as category_name')->join('categories', 'categories.id', '=', 'blogs.category_id')->get();
        }
        public function getById(string $id)
        {
            return Blog::findOrFail($id);
        }
        public function getBlogTags(string $id)
        {
            return BlogTags::where('blog_id', $id)->get();
        }
        public function create(array $data , BlogsTagsDTO $tags)
        {
            Blog::create($data);
            $blog_id = Blog::latest()->first()->id;
            foreach ($tags->tag_id as $tag) {
                BlogTags::create(['blog_id' => $blog_id, 'tag_id' => $tag]);
            }
        return true;
        }

        public function update(array $data , BlogsTagsDTO $tags, string $id)
        {
            Blog::where('id', $id)->update($data);
             BlogTags::where('blog_id', $id)->delete();
            foreach ($tags->tag_id as $tag) {
                BlogTags::create(['blog_id' => $id, 'tag_id' => $tag]);
            }
            return true;
        }

        public function delete(string $id)
        {
            $selected = Blog::findOrFail($id);
            $photo = $selected->image;
            $image_path = public_path($photo);
            if (file_exists($image_path)) 
            {
                unlink($image_path);
            }
            $selected->delete();
            BlogTags::where('blog_id', $id)->delete();
            return true;
        }

    }