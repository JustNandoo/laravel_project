<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $Students = [
        [
        "id" => 1,
        "nis" => 2031,
        "nama" => "Ilham",
        "kelas" => "11 PPLG 1",
        "alamat" => "Jepara"

    ],
    [
        "id" => 2,
        "nis" => 3222,
        "nama" => "Ical",
        "kelas" => "11 PPLG 1",
        "alamat" => "Sumbawa"

    ], 
    [
       
        "id" => 3,
        "nis" => 6456,
        "nama" => "Aufa",
        "kelas" => "11 PPLG 1",
        "alamat" => "Kudus"

    ],
    [
        "id" => 4,
        "nis" => 5467,
        "nama" => "Seno",
        "kelas" => "11 PPLG 1",
        "alamat" => "Kudus"

    ],
    [
        "id" => 5,
        "nis" => 9876,
        "nama" => "Calvin",
        "kelas" => "11 PPLG 1",
        "alamat" => "Jember"
    ]

    ];

    public static function all(){
        return self::$Students;
    }
}
