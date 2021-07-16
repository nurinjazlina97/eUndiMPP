<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramVotes extends Model
{
    use HasFactory;
    protected $fillable = [
            'identification_number_student',
            'identification_number_pcandidate',
            'program',
            'vote_count',
            'winners'
        ];
}
