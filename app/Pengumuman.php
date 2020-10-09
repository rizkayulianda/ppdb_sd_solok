<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $no_pendaftaran
 * @property string $nik_siswa
 * @property string $tanggal_pendaftaran
 * @property string $kd_sekolah
 * @property string $created_at
 * @property string $updated_at
 */
class Pengumuman extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengumuman';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['no_pendaftaran', 'nik_siswa', 'tanggal_pendaftaran', 'kd_sekolah', 'created_at', 'updated_at'];

}
