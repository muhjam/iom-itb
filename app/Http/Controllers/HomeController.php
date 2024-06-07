<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
     
        // $products =  DB::table('products')
        //  ->orderBy('qty' ,'DESC', 'updated_at', 'DESC');

        // if(request('q')){
        //     $products->where('name', 'like', '%'.request('q').'%')
        //     ->orWhere('brand', 'like', '%'.request('q').'%')
        //      ->orderBy('qty' ,'DESC', 'updated_at', 'DESC');
        // }elseif(request('type')){
        //     $products->where('type', '=',ucfirst(request('type')))
        //      ->orderBy('qty' ,'DESC', 'updated_at', 'DESC');
        // }
        $news = [
            (object)[
                'image' => '/images/news1.png',
                'title' => 'Sekolah Calon Trainer (SCT) 1 CDT ITB ; Kebe...',
                'date' => '28 Mei 2024',
                'views' => 70,
                'excerpt' => 'Bandung, ITB menggelar acara...'
            ],
            // Tambahkan data berita lainnya di sini
        ];

        return view('home', [
            'title' => 'Home',
            'news' => $news,
        ]);
     }
}
