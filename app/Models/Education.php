<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = "education";
    protected $primaryKey = "id";
    protected $fillable = [
        'Degree',
        'Discipline',
        'Institute',
        'Location',
        'Started_at',
        'Ended_at'
    ];

    public function User() {
        return $this->hasMany(User::class);
    }
}
