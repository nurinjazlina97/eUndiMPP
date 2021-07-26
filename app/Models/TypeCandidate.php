<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCandidate extends Model
{
    use HasFactory;
    protected $fillable = [
            'type_candidate_id',
            'type',
        ];
}
