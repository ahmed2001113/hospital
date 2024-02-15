<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnostic extends Model
{
    use HasFactory;

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
