<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCandidate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'type_candidate_id',
        'candidate_id'
    ];

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }
}
