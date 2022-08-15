<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journals extends Model
{
    use HasFactory;
    protected $fillable = ['intention', 'affirmation', 'gratitude'];
}
