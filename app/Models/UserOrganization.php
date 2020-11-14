<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'org_id'];

    public function organizations() {
        return $this->belongsTo(\App\Models\Organization::class, 'id', 'org_id');
    }

    public function users() {
        return $this->belongsTo(\App\Models\User::class, 'id', 'user_id');
    }
}
