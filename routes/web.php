<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page' ]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Hersya Yudina', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> [
        [
            'id' => 1,
           'title'=>'Judul Artikel 1',
           'author'=> 'Hersya yudina', '|  11 July 2024',
           'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, fuga. Repudiandae architecto eos debitis, magni quasi, ut vel fugiat quo esse temporibus molestiae, accusantium omnis? Dolorem, quis voluptas? Praesentium, est.'
        ],
        [
            'id'=> 2,
            'title'=>'Judul Artikel 2',
            'author'=> 'Alexander Robert', '|  11 July 2024',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt nihil asperiores ratione, iure, cum quisquam vero consequuntur accusamus officiis tempore suscipit mollitia ipsa sint aliquam corrupti ea vitae! Eius.'
         ],
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        'id' => 1,
       'title'=>'Judul Artikel 1',
       'author'=> 'Hersya yudina', '|  11 July 2024',
       'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, fuga. Repudiandae architecto eos debitis, magni quasi, ut vel fugiat quo esse temporibus molestiae, accusantium omnis? Dolorem, quis voluptas? Praesentium, est!'
    ],
    [
        'id'=> 2,
        'title'=>'Judul Artikel 2',
        'author'=> 'Alexander Robert', '|  11 July 2024',
        'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt nihil asperiores ratione, iure, cum quisquam vero consequuntur accusamus officiis tempore suscipit mollitia ipsa sint aliquam corrupti ea vitae! Eius!'
     ]
    ];


});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
