<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    use HasFactory;

    protected $table = 'activity_category';

  public static function validate($request)
  {
    $request->validate([
      "activity_id" => "required",
      "category_id" => "required",

    ]);
  }
}
