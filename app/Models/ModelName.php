<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use HasFactory;

    public static function data()
    {
        $content = [
            'head'=>'Welcome',
            'body'=>'Stuffed Toys On Sale!!!'

        ];
        return $content;
    }
    public static function index()
    {
        $content = [
            'head'=>'Welcome',
            'body'=>'Stuffed Toys On Sale!!!'

        ];
        return $content;
    }
}
