<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class layanan
 * @package App\Models
 * @version July 30, 2022, 7:43 am UTC
 *
 * @property string $nama_layanan
 * @property string $keterangan
 * @property string $foto
 */
class layanan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'layanans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_layanan',
        'keterangan',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_layanan' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_layanan' => 'required',
        'keterangan' => 'required'
    ];

    
}
