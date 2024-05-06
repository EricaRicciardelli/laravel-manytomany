<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Console extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function games(){
        return $this->belongsToMany(Game::class);
    }

}
