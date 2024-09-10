<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the transaction_items for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaction_items(): HasMany
    {
        return $this->hasMany(TransactionItem::class, 'product_id');
    }

    /**
     * The discounts that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class, 'product_discounts', 'product_id', 'discount_id');
    }

    /**
     * Get all activity logs for the Product
     *
     * @return float
     *
     *public function activityLogs()
     *{
     *    return $this->morphMany(StaffActivityLog::class, 'loggable');
     *}
     */
}
