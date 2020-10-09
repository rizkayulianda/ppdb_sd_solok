<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $kd_sekolah
 * @property string $nama_op
 * @property string $email_op
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property Sekolah[] $sekolahs
 */
class Operator extends Authenticable
{

    use Notifiable;
    protected $guarded='operator';
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'operator';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kd_sekolah', 'nama_op', 'email_op', 'password', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    protected $hidden = ['password'];

    public function sekolahs()
    {
        return $this->hasMany('App\Sekolah', 'kd_sekolah', 'kd_sekolah');
    }
}