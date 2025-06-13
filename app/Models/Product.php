<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Categories;
class Product extends Model

{
  use HasFactory;
  protected static function booted()
  {
    static::creating(function ($product) {
      $product->uuid = Str::uuid();
    });
  }
  public function categories():BelongsTo{
    return $this->belongsTo(Categories::class);
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'id',
    'product_name',
    'slug',
    'uuid',
    'price',
    'amount',
    'categories_id'
  ];
}
