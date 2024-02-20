<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstraculicullars
{
    private static $ekstraculicullars = [
        [
        "id" => 1,
        "nama" => "Esport",
        "pembina" => "Calvin",
        "deskripsi" => "Ekstra bermain game"

    ],
    [
        "id" => 2,
        "nama" => "Futsal",
        "pembina" => "Altan",
        "deskripsi" => "Ekstra bermain sepak bola"

    ], 
    [
       
        "id" => 3,
        "nama" => "Anti Perundungan",
        "pembina" => "Ilham",
        "deskripsi" => "Ekstra untuk mencegah adanya perundungan di sekolah"

    ],
    [
        "id" => 4,
        "nama" => "Jurnalistik",
        "pembina" => "Filo",
        "deskripsi" => "Ekstra bagi orang orang yang memiliki kreatifitas tinggi dan suka berfoto foto serta edit vidio"

    ],
    [
        "id" => 5,
        "nama" => "Basket",
        "pembina" => "Solomon",
        "deskripsi" => "Ekstra bermain bola basket"
    ]

    ];

    public static function all(){
        return self::$ekstraculicullars;
    }
}
