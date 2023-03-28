<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoruoselItem extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'CoruoselItem ';

      /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'carousel_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'corousel_name',
        'image_path',
        'discription',
        'user_id'
    ];
}
