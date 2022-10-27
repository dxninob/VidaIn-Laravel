<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModule extends Model
{
    use HasFactory;

    protected $table = 'user_module';

    public static function validate($request)
    {
        $request->validate([
            "score" => "required",
            "module_id" => "required",
            "user_id" => "required",
        ]);
    }
}
