<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['product', 'image', 'price', 'description'];

    public static function getAll()
    {
        return self::all();
    }

    public static function getPagination($perPage=10)
    {
        return self::orderBy('id', 'desc')->simplePaginate($perPage);
    }

    public static function byId($id)
    {
        return self::find($id);
    }
}
