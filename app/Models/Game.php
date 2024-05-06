<?php

namespace App\Models;

use App\Models\Console;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'img'];

    public function consoles(){
        return $this->belongsToMany(Console::class);
     }
 
}
