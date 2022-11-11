<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'partner_id',
        'amount'
    ];
}
