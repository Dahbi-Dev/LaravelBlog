<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller {
    public function index() {
        return view( 'blog.index' )
        ->with( 'posts', Post::get() );
    }

    public function create() {
        return view( 'blog.create' );
    }

    public function store( Request $request ) {
        // dd( $request );
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,webp|max:5048',
        ] );

        $slug = Str::slug( $request->title, '-' );

        $newImageName = uniqid() .'-'. $slug . '.' . $request->image->extension();
        $request->image->move( public_path( 'images' ), $newImageName );

        Post::create( [
            'title' => $request->input( 'title' ),
            'description' => $request->input( 'description' ),
            'slug' => $slug ,
            'image_path' => $newImageName,
            'user_id' =>  auth()->user()->id ,
        ] );
        return redirect( '/blog' )
        ->with( 'message', 'Post Created Successefly' );

    }

    public function show( $slug ) {
        return view( 'blog.show' )
        ->with( 'post', Post::where( 'slug', $slug )->first() );
    }

    public function edit( $slug ) {
        return view( 'blog.edit' )
        ->with( 'post', Post::where( 'slug', $slug )->first() );
    }

    public function update( Request $request, $slug ) {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
        ] );

        // Find the post by slug
        $post = Post::where( 'slug', $slug )->first();

        // Check if a new image is uploaded
        if ( $request->hasFile( 'image' ) ) {
            // Validate the uploaded image
            $request->validate( [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5048', // Adjust the max size as needed
            ] );

            // If a new image is uploaded, move and update the image
            $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
            $request->image->move( public_path( 'images' ), $newImageName );
            $post->update( [ 'image_path' => $newImageName ] );
        }

        // Update title and description
        $post->update( [
            'title' => $request->input( 'title' ),
            'description' => $request->input( 'description' ),
        ] );

        return redirect( '/blog/' . $slug )
        ->with( 'message', 'Post Updated Successfully' );
    }

    public function destroy( $slug ) {
        Post::where( 'slug', $slug )->delete();
        return redirect( '/blog/' )
        ->with( 'message-d', 'Post Deleted Successefly' );
    }
}
