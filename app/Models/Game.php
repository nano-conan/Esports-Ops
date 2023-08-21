<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'subtitle',
        'description',
        'team',
        'mm',
        'jungle',
        'exp',
        'mid',
        'tank',
        'video',
    ];

    public function markers() {
        return $this->hasMany(Marker::class);
    }
}
