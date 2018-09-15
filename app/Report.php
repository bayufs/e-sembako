<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partisipan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'kelamin', 'alamat','nik','no_kartu','id_rw',
    ];

    public $timestamps = false; 
}
