<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'org_id'];

    public function organization() {
        return $this->hasOne(\App\Models\Organization::class, 'id', 'org_id');
    }

    public function user() {
        return $this->hasOne(\App\Models\User::class, 'id', 'user_id');
    }
}
