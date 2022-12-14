<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    public static function validate($request)
    {
        $request->validate([
            "question" => "required|max:255",
            "module" => "required|max:255",
        ]);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_question');
    }
}
