<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public static function validate($request)
    {
        $request->validate([
            "description" => "required|max:255",
        ]);
    }
}
