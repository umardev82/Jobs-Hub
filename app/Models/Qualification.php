<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'university_id',
        'degree_id',
        'from',
        'to',
    ];

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }

}
