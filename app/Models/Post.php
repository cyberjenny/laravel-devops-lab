<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
}
use App\Models\Post;  // Import the Post model

Route::get('/create-post', function () {
    // Create a new post in the database
    $post = Post::create([
        'title' => 'My First Post',
        'body' => 'This is the body of my first post.'
    ]);

    // Return the post as JSON response
    return $post;
});
protected $fillable = ['title', 'body'];