<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    use HasFactory;

    protected $table = 'usermod';

    public static function validate($request)
    {
        $request->validate([
            "score" => "required",
            "module_id" => "required",
            "user_id" => "required",
        ]);
    }
}
