<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable =['address_line_one','address_line_two','address_line_three','zip_code','zip_code_plus','city','state','country','is_postal'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
