<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'name';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // protected $casts = [
    //     'status' => 'boolean',
    // ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function added()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
}
