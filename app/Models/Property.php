<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "cat_id",
        "owner_name",
        "email",
        "phone",
        "addr1",
        "addr2",
        "room",
        "floor",
        "age_property",
        "rent_out",
        "price",
        "about_property",
        "user_id",
        "cover",
        "status"
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
