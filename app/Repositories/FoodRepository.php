<?php

namespace App\Repositories;

use App\Models\Food;
use App\Repositories\BaseRepository;

/**
 * Class FoodRepository
 * @package App\Repositories
 * @version November 29, 2020, 2:06 pm UTC
*/

class FoodRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
        'description',
        'status',
        'restaurant_id',
        'price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Food::class;
    }
}