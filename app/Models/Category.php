<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;
    use Translatable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $translatable = ['title'];
    
    public function products(){

        return $this->hasMany(Product::class);
    }

}
