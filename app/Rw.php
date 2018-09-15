<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rw';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_rw'
    ];
}
