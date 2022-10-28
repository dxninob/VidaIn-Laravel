<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityModule extends Model
{
  use HasFactory;

  protected $table = 'activity_module';

  public static function validate($request)
  {
    $request->validate([
      "activity_id" => "required",
      "module_id" => "required",

    ]);
  }
}
