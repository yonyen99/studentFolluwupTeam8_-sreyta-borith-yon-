<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;
class Comment extends Model
{
    public function students(){
        return $this->belongsToMany(Student::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
