<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'job_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function job(){
       return $this->belongsTo(Job::class,'job_id');
    }


}
