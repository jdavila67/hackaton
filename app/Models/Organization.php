<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','mission','vision','email','phone_number_one','phone_number_two','org_logo'];

    public function addresses()
    {
        return $this->hasMany(\App\Models\Address::class,'org_id','id');
    }
    public function events()
    {
        return $this->hasMany(\App\Models\Event::class,'org_id','id');
    }
    public function contacts()
    {
        return $this->hasMany(\App\Models\Contact::class,'org_id','id');
    }
    public function files()
    {
        return $this->hasMany(\App\Models\File::class,'org_id','id');
    }
    public function organizationMembers()
    {
        return $this->hasMany(\App\Models\OrganizationMember::class,'org_id','id');
    }
    public function organizationTags()
    {
        return $this->hasMany(\App\Models\OrganizationTag::class,'org_id','id');
    }
}
