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
    $data=[
        'text'=>'
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dignissimos temporibus eveniet reprehenderit? Adipisci, ducimus debitis consequuntur omnis fuga, perferendis beatae, incidunt veritatis minima iste doloribus pariatur? Aperiam, alias sequi!
        Facere est odio expedita sed earum sequi soluta laborum rerum labore necessitatibus, officiis corrupti blanditiis quibusdam autem? Officiis iure at deserunt. Doloribus necessitatibus id ad minima, odio nesciunt cum alias!
        Consequuntur officia veritatis corporis laudantium sint cum quidem magni tenetur mollitia excepturi. In, corrupti? Dignissimos, corporis earum itaque cumque officiis quisquam, in sit aliquam ullam nihil velit, quas cum ratione!',
        'city'=>'Rome',
        'data_post'=>'2022/10/06',
        'img'=>'https://picsum.photos/100',
        'profile'=>'John Doe',
        'comments'=>[
            'nice post',
            'buuuuuuh',
            'I LOVE U ',
            'fake news'
        ]
         ];
    return view('homepage', $data);
});
