<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $kd_zonasi
 * @property string $nama_zonasi
 * @property string $created_at
 * @property string $updated_at
 */
class Zonasi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'zonasi';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kd_zonasi', 'nama_zonasi', 'created_at', 'updated_at'];

}
