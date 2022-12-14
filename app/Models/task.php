<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{

    protected $fillable = ['name'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    use HasFactory;
}
