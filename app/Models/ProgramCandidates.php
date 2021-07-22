<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCandidates extends Model
{
    use HasFactory;

    protected $fillable = [
            'identification_number_pcandidate',
            'name',
            'program',
            'image'
        ];
}
