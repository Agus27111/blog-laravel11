<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            ['slug'=> 'judul-artikel-1', 'title'=> 'Judul Artikel 1', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente voluptatum, maiores, earum temporibus et voluptatem animi, fugiat numquam suscipit iste assumenda vel ipsum debitis reiciendis quae sed voluptates! Eveniet.'],
            ['slug'=> 'judul-artikel-2','title'=> 'Judul Artikel 2', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ratione numquam dolorem provident corporis, dolore amet necessitatibus eligendi repellendus molestias in sunt quia suscipit quam, deserunt iure culpa consequuntur iusto?']
        ];
    }
    public static function find($slug):Array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] === $slug;
        // });

        // $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

        // if(!$post){
        //     abort(404);
        // }

        // return $post;

        return Arr::first(static::all(), fn ($post) => $post['slug'] === $slug) ?: abort(404);

    }
}

