<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_number','email'];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
