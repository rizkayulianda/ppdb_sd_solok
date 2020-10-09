<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $kd_zonasi
 * @property string $no_kk
 * @property string $nama_siswa
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat_siswa
 * @property string $lat_siswa
 * @property string $long_siswa
 * @property string $jenis_kelamin
 * @property string $pendidikan_sebelumnya
 * @property string $nik_siswa
 * @property string $image_kk
 * @property string $image_akte
 * @property string $image_ijazah_tk
 * @property string $image_pasfoto
 * @property string $created_at
 * @property string $updated_at
 * @property Zonasi $zonasi
 * @property Ortu $ortu
 * @property KesehatanSiswa[] $kesehatanSiswas
 * @property Pendaftaran[] $pendaftarans
 */
class CalonSiswa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'calon_siswa';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kd_zonasi', 'no_kk', 'nama_siswa', 'tempat_lahir', 'tanggal_lahir', 'alamat_siswa','lat_siswa','long_siswa', 'jenis_kelamin', 'pendidikan_sebelumnya', 'nik_siswa', 'image_kk', 'image_akte', 'image_ijazah_tk', 'image_pasfoto', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zonasi()
    {
        return $this->belongsTo('App\Zonasi', 'kd_zonasi', 'kd_zonasi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ortu()
    {
        return $this->belongsTo('App\Ortu', 'no_kk', 'no_kk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kesehatanSiswas()
    {
        return $this->hasMany('App\KesehatanSiswa', 'nik_siswa', 'nik_siswa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran', 'nik_siswa');
    }
}
