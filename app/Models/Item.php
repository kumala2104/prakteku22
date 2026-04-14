<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use SoftDeletes,HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id', 'image', 'is_available','created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
