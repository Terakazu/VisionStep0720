<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    
    protected $fillable=['user_id','deadline','condition','action','is_selected'];
    
    protected $casts = [
        'is_selected' => 'boolean',
    ];
}
