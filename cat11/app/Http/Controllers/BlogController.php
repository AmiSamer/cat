<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.add-blog');
    }

    public function saveBlog(Request $request)
    {
//        Blog::create($request->all());
//        return 'success';

        $blogImage = $request->file('blog_image');
        $imageName = $blogImage->getClientOriginalName();
        $directory = 'public/admin/blog-images/';
        $imageUrl = $directory.$imageName;
        $blogImage->move($directory,$imageName);


        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->author_name = $request->author_name;
        $blog->blog_desc = $request->blog_desc;
        $blog->blog_image = $imageUrl;
        $blog->status = $request->status;
        $blog->save();
        return redirect('/add-blog')->with('message','Blog added successfully');
    }

    public function viewBlog()
    {
        $blogs = Blog::all();
        return view('admin.blog.view-blog',[
            'blogs'=>$blogs
        ]);
    }

    public function publishedBlog($id)
    {
       $blog = Blog::find($id);
       $blog->status = 0;
       $blog->save();

       return redirect('/view-blog');
    }

    public function unpublishedBlog($id)
    {
        $blog = Blog::find($id);
        $blog->status = 1;
        $blog->save();

        return redirect('/view-blog');
    }

    public function updateBlog(Request $request)
    {
        $blog = Blog::find($request->id);
        $blogImage = $request->file('blog_image');

        if ($blogImage)
        {
             unlink($blog->blog_image);
            $imageName = $blogImage->getClientOriginalName();
            $directory = 'public/admin/blog-images/';
            $imageUrl = $directory.$imageName;
            $blogImage->move($directory,$imageName);

            $blog->blog_title = $request->blog_title;
            $blog->author_name = $request->author_name;
            $blog->blog_desc = $request->blog_desc;
            $blog->blog_image = $imageUrl;
            $blog->save();
        }
        else
        {
            $blog->blog_title = $request->blog_title;
            $blog->author_name = $request->author_name;
            $blog->blog_desc = $request->blog_desc;
            $blog->save();
        }

        return redirect('/view-blog')->with('message','Blog updated successfully');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/view-blog')->with('message','Blog deleted successfully');
    }
}
