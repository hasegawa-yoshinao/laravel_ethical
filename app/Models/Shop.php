<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\shop;
use App\Models\SecondaryCategory;
use App\Models\Image;




class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'name',
        'information',
        'filename',
        'is_selling'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
