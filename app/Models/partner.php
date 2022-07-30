<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class partner
 * @package App\Models
 * @version July 30, 2022, 7:48 am UTC
 *
 * @property string $foto
 */
class partner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'partners';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
