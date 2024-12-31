<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('Home', ['title'=> 'Home']);
});
Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts'=> [
        ['slug'=> 'judul-artikel-1', 'title'=> 'Judul Artikel 1', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente voluptatum, maiores, earum temporibus et voluptatem animi, fugiat numquam suscipit iste assumenda vel ipsum debitis reiciendis quae sed voluptates! Eveniet.'],
        ['slug'=> 'judul-artikel-2','title'=> 'Judul Artikel 2', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ratione numquam dolorem provident corporis, dolore amet necessitatibus eligendi repellendus molestias in sunt quia suscipit quam, deserunt iure culpa consequuntur iusto?']
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        ['slug'=> 'judul-artikel-1', 'title'=> 'Judul Artikel 1', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente voluptatum, maiores, earum temporibus et voluptatem animi, fugiat numquam suscipit iste assumenda vel ipsum debitis reiciendis quae sed voluptates! Eveniet.'],
        ['slug'=> 'judul-artikel-2','title'=> 'Judul Artikel 2', 'author'=> 'Agus Setiawan', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ratione numquam dolorem provident corporis, dolore amet necessitatibus eligendi repellendus molestias in sunt quia suscipit quam, deserunt iure culpa consequuntur iusto?']
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] === $slug;
    });

    return view('post', ['title'=> 'Single Post', 'post'=> $post]);
});
Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});
