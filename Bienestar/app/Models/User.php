<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'document',
        'birthday',
        'phone',
        'nameCuidador',
        'documentCuidador',
        'namePatient',
        'documentPatient',
        'entity',
        'profession',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    public function patients()
    {
        return $this->belongsToMany(User::class, 'doctor_patient');
    }

    public function getPatients()
    {
        return $this->patients;
    }

    public function setPatients($patients)
    {
        $this->patients = $patients;
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'user_question');
    }
}
