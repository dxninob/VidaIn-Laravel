<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required|max:255",
        ]);
    }
}
