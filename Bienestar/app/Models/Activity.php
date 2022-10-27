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

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_activities');
    }

    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers($users)
    {
        $this->users = $users;
    }
}
