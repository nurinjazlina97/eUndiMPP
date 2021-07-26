<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralVotes extends Model
{
    use HasFactory;
    protected $fillable = [
            'identification_number_student',
            'identification_number_gcandidate',
            'vote_count',
            'winners'
        ];

    public function calonumums()
    {
        return $this->belongsTo(GeneralCandidate::class,'general_candidate_id');
    }
}
