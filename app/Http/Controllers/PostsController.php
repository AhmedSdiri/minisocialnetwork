<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;
//db facade
use DB;


class PostsController extends Controller
{
    
    
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      $posts = Post::paginate(10);
        
      // $posts = Post::withTrashed()->paginate(10);
      //  $posts = Post::onlyTrashed()->paginate(10);
        //or the same thing
      //  $posts = DB::table('posts')->get();
       
        // $posts = Post::whereLive(1)->get();
          //or the same thing
       // $posts = DB::table('posts')->whereLive(1)->get();
      //return $posts;
        
       
        
        return view('articles.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return 'hello i am store';
        // return $request->all();
       /* 
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->content = $request->content;
        $post->live = (boolean) $request->live;
        $post->post_on =$request->post_on;
        
        $post->save();*/
        
     /*   //another method to save data the create method !! be aware from the mass assignement exception because the field must have the same names matching woth the database or you can add to the fillable
       //creating with eloquent
        Post::create($request->all());*/
        
        
       
      /*  //query builder !! be aware it will be without timestamp
        DB::table('posts')->insert($request->except('_token'));*/
        
        Post::create($request->all());
        return redirect('/articles');   
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return $id;
        //return Post::findOrFail($id)->content;
        $post = Post::findOrFail($id);
        return view('articles.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
         
        return view('articles.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return "i am the update function after clicking on the submit button of edit";
         // return $request->all();
        $post = Post::findOrFail($id);
        if(!isset($request->live))
            $post->update(array_merge($request->all(),['live' => false]));
            else
            $post->update($request->all());
        
        return redirect('/articles');
      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /*$post = Post::findOrFail($id);
    
       $post->delete();*/
        
        //or you can use destroy simply
       Post::destroy($id);
        
        //delete entirly from the system
        /*Post::forceDelete($id);*/
        
         return redirect('/articles');
    }
    public function restore($id)
    {
       $post = Post::findOrFail($id);
        $post->restore();
    }
}
