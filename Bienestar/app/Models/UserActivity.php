<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    protected $table = 'user_activity';

    public static function validate($request)
    {
        $request->validate([
            "done" => "required",
            "activity_id" => "required",
            "user_id" => "required",
            "eval" => "required",
        ]);
    }
}
