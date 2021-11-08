<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $primaryKey = 'branch_id';
    protected $keyType = 'string';

    protected $fillable = [
        'branch_location',
        'branch_phone',
        'branch_rating',
        'franchise_id'
    ];

    public function franchise(){
        //return $this->belongsTo(Parent Class, Child Primary Key, Parent Primary Key);
        return $this->belongsTo(Franchise::class, 'franchise_id', 'franchise_id');
    }

}
