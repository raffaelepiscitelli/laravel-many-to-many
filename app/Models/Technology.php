<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'technology'
    ];

    public function portfolios(){
        return $this->belongsToMany(Portfolio::class);
    }
}
