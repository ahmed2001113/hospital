<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $fillable= ['name','Address','email','Password','Date_Birth','Phone','Gender','Blood_Group'];
}
