<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'program_id');
    }
}
