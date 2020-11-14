<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','mission','vision','email','phone_number_one','phone_number_two'];

    public function addresses()
    {
        return $this->hasMany(\App\Models\Address::class,'org_id','id');
    }
}
