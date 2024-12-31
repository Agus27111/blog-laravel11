<x-layout>
<x-slot:title>{{$title}}</x-slot:title>
    <h1>Ini halaman Blog</h1>


    <article class="py-8 max-w-screen-md border-b border-gray-300">

            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>

        <div class="text-gray-500 text-base">
            <a href="#">{{$post['author']}}</a> | 1 January 2025
        </div>

        <p class="my-4 font-light">{{$post['content']}}
        </p>
        <a  class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts </a>
    </article>


</x-layout>
