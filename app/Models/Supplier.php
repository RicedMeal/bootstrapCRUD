<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    #protected $primaryKey = 'Supplier_ID';
    protected $fillable = [
        'Supplier_ID',
        'Supplier_Name',
        'Address',
        'Tel_No',
        'Fax_No',
        'Website',
        'Contact_Person',
        'Email',
    ];
}
