<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KesehatanSiswa;
use App\CalonSiswa;

/**
 * @property integer $id
 * @property string $nik_siswa
 * @property int $tinggi
 * @property int $berat
 * @property string $penglihatan
 * @property string $pendengaran
 * @property string $gigi
 * @property string $riwayat_penyakit
 * @property string $created_at
 * @property string $updated_at
 * @property CalonSiswa $calon_siswa
 */
class KesehatanSiswa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kesehatan_siswa';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nik_siswa', 'tinggi', 'berat', 'penglihatan', 'pendengaran', 'gigi', 'riwayat_penyakit', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function calon_siswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'nik_siswa', 'nik_siswa');
    }
}
