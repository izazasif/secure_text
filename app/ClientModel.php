<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{  
    use Sluggable;
    protected $guarded = [];
    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
