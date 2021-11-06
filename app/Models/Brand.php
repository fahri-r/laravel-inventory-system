<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    protected $table = 'brands';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'name',
        'active',
    ];
    public $timestamps = true;
}