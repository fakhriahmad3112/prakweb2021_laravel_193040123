<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fakhri Ahmad",
        "email" => "193040123.fakhri@unpas.ac.id",
        "image" => "fakhri.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fakhri Ahmad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Laborum dolor illum harum accusantium dolorem modi ducimus ab! Perferendis harum qui neque temporibus. 
        Voluptatum in alias quas ea nihil nostrum est excepturi, perferendis impedit quam aperiam eaque dolorum 
        necessitatibus odit a. Natus perferendis voluptates nemo nesciunt nihil necessitatibus! Nemo ratione adipisci 
        recusandae sapiente, quod tempora veniam nam minima fugiat necessitatibus, voluptas commodi debitis aliquid in 
        saepe possimus voluptatum asperiores obcaecati. Error in iure adipisci, magnam quidem sequi quod laborum illum esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "zaskha sasmita",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Ipsum, veritatis labore harum recusandae iusto, enim soluta qui est eligendi perspiciatis maxime quis 
        dolorum alias vel deleniti ab quaerat tempore porro. Saepe dolores consequatur, ipsum eum, deleniti 
        accusantium quos aut fugiat placeat minima cupiditate laboriosam! Deserunt, possimus, magni corrupti 
        dignissimos commodi accusamus adipisci dicta asperiores voluptate natus explicabo? Incidunt sapiente quia 
        laboriosam iste, id porro suscipit. Molestias cupiditate maiores ipsum, esse doloribus enim ratione dignissimos 
        ut nisi nulla harum quo eius laborum nobis autem, non ipsam magni, voluptatem nostrum. Sit nihil cum 
        exercitationem nesciunt provident laboriosam. Libero excepturi quam deleniti tempore."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fakhri Ahmad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Laborum dolor illum harum accusantium dolorem modi ducimus ab! Perferendis harum qui neque temporibus. 
        Voluptatum in alias quas ea nihil nostrum est excepturi, perferendis impedit quam aperiam eaque dolorum 
        necessitatibus odit a. Natus perferendis voluptates nemo nesciunt nihil necessitatibus! Nemo ratione adipisci 
        recusandae sapiente, quod tempora veniam nam minima fugiat necessitatibus, voluptas commodi debitis aliquid in 
        saepe possimus voluptatum asperiores obcaecati. Error in iure adipisci, magnam quidem sequi quod laborum illum esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "zaskha sasmita",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Ipsum, veritatis labore harum recusandae iusto, enim soluta qui est eligendi perspiciatis maxime quis 
        dolorum alias vel deleniti ab quaerat tempore porro. Saepe dolores consequatur, ipsum eum, deleniti 
        accusantium quos aut fugiat placeat minima cupiditate laboriosam! Deserunt, possimus, magni corrupti 
        dignissimos commodi accusamus adipisci dicta asperiores voluptate natus explicabo? Incidunt sapiente quia 
        laboriosam iste, id porro suscipit. Molestias cupiditate maiores ipsum, esse doloribus enim ratione dignissimos 
        ut nisi nulla harum quo eius laborum nobis autem, non ipsam magni, voluptatem nostrum. Sit nihil cum 
        exercitationem nesciunt provident laboriosam. Libero excepturi quam deleniti tempore."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
