<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    use HasFactory;

    protected $table = 'usermods';

    public static function validate($request)
    {
        $request->validate([
            "score" => "required|numeric|gt:0",
            "module_id" => "required|exists:modules,id",
            "user_id" => "required|exists:users,id",
        ]);
    }
}
