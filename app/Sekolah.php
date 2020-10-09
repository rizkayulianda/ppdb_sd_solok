<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $kd_sekolah
 * @property string $kd_zonasi
 * @property string $nama_sekolah
 * @property string $alamat_sekolah
 * @property string $lat_sekolah
 * @property string $long_sekolah
 * @property string $email_sekolah
 * @property string $web_sekolah
 * @property string $notelp_sekolah
 * @property string $kepala_sekolah
 * * @property string $kepala_sekolah
 * @property string $created_at
 * @property string $updated_at
 * @property Operator $operator
 * @property Zonasi $zonasi
 * @property Pendaftaran[] $pendaftarans
 */
class Sekolah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sekolah';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kd_sekolah', 'kd_zonasi', 'nama_sekolah', 'alamat_sekolah','email_sekolah','lat_sekolah','long_sekolah', 'web_sekolah', 'notelp_sekolah', 'kepala_sekolah', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operator()
    {
        return $this->belongsTo('App\Operator', 'kd_sekolah', 'kd_sekolah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zonasi()
    {
        return $this->belongsTo('App\Zonasi', 'kd_zonasi', 'kd_zonasi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran', 'kd_sekolah', 'kd_sekolah');
    }
}
