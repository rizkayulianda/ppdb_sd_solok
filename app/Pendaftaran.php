<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nik_siswa
 * @property string $kd_sekolah
 * @property string $kd_zonasi
 * @property string $no_pendaftaran
 * @property string $tanggal_pendaftaran
 * @property string $status
 * @property float $jarak
 * @property string $created_at
 * @property string $updated_at
 * @property Sekolah $sekolah
 * @property Zonasi $zonasi
 * @property CalonSiswa $calonSiswa
 */
class Pendaftaran extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pendaftaran';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nik_siswa', 'kd_sekolah', 'kd_zonasi', 'no_pendaftaran', 'tanggal_pendaftaran', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolah()
    {
        return $this->belongsTo('App\Sekolah', 'kd_sekolah', 'kd_sekolah');
    }

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
    public function calonSiswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'nik_siswa');
    }
}
