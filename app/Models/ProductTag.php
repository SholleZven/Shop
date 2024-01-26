<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = 'product_tags';
    protected $guarder = false;
    protected $fillable = [
        'tag_id',
        'product_id'
    ];
}
