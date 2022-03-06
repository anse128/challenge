<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'information';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['LastName', 'Gender', 'Age', 'City', 'State', 'Country', 'MarvelCharacter', 'MarvelComic'];

    
}
