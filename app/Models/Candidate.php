<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'program_id',
        'type_candidate_id',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class,'program_id');
    }

    public function candidate()
    {
        return $this->belongsTo(TypeCandidate::class,'type_candidate_id');
    }
}
