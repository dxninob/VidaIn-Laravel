<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPatient extends Model
{
  use HasFactory;

  protected $table = 'doctor_patient';

  public static function validate($request)
  {
    $request->validate([
      "doctor_id" => "required",
      "patient_id" => "required",

    ]);
  }
}
