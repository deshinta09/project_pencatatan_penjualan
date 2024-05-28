<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

class Order extends Model 
{
    use HasFactory;

    protected $fillable = ['customer_id', 'code', 'address', 'subtotal', 'discount', 'total'];
    
    public function customer(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}