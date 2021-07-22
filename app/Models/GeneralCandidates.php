<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GeneralCandidates extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
            'identification_number_gcandidate',
            'name',
            'program',
            'image',
        ];
}
