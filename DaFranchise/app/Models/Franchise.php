<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $primaryKey = 'franchise_id';
    protected $keyType = 'string';

    protected $fillable = [
        'franchise_id',
        'franchise_name',
        'franchise_founded',
        'franchise_type',
        'franchise_outlet',
        'franchise_investment',
        'franchise_logo',
        'franchise_website',
        'franchise_description',
    ];

    public function branches()
    {
        //return $this->hasMany(Child Class, Child Primary Key, Parent Primary Key);
        return $this->hasMany(Branch::class, 'franchise_id', 'franchise_id');
    }


}
