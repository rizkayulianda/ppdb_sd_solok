<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $pekerjaan_ayah
 * @property string $pekerjaan_ibu
 * @property string $pendidikan_ayah
 * @property string $pendidikan_ibu
 * @property string $alamat_ortu
 * @property string $no_hp_ortu
 * @property string $no_kk
 * @property string $created_at
 * @property string $updated_at
 * @property CalonSiswa[] $calonSiswas
 */
class Ortu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ortu';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'pendidikan_ayah', 'pendidikan_ibu', 'alamat_ortu', 'no_hp_ortu', 'no_kk', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calonSiswas()
    {
        return $this->hasMany('App\CalonSiswa', 'no_kk', 'no_kk');
    }
}
