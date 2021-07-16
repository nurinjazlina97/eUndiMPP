<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralCandidates extends Model
{
    use HasFactory;
    protected $fillable = [
            'identification_number_gcandidate',
            'name',
            'program',
            'image'
        ];
}
