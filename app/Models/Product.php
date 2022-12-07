<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];
    public function priceList()
    {
        return  $this->belongsTo(PriceList::class);
    }

    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    public function payments()
    {
        return  $this->hasMany(Payment::class);
    }
}
