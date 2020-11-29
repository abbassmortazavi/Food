<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Food
 * @package App\Models
 * @version November 29, 2020, 2:06 pm UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $description
 * @property string $status
 * @property integer $restaurant_id
 * @property integer $price
 */
class Food extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'food';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'status',
        'restaurant_id',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'image' => 'string',
        'description' => 'string',
        'status' => 'string',
        'restaurant_id' => 'integer',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'image' => 'required',
        'description' => 'required',
        'status' => 'required',
        'restaurant_id' => 'required',
        'price' => 'required'
    ];

    
}
