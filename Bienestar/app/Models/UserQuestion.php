<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    use HasFactory;

    protected $table = 'user_question';

    public static function validate($request)
    {
        $request->validate([
            "question_score" => "required",
            "question_id" => "required",
            "user_id" => "required",
        ]);
    }
}
