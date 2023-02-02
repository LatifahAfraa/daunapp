<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class member extends Authenticatable
{
    use Notifiable;

    protected $table = "otw_member";
    protected $primaryKey = "id_member";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nohp',
        'nama',
        'password',
        'id_toko',
        'id_jenis',
        'nama_warung',
        'id_provinsi',
        'id_kota',
        'id_kecamatan',
        'alamat',
        'kode_agen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $attributes = [
        'alamat' => '',
        'remember_token' => ''
    ];

    /**
     * Get all of the orders for the member
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(order::class, 'id_member', 'id');
    }

    /**
     * Get the provinsi that owns the member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(provinsi::class, 'id_provinsi', 'id');
    }

    /**
     * Get the kota that owns the member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kota(): BelongsTo
    {
        return $this->belongsTo(kota::class, 'id_kota', 'id');
    }

    /**
     * Get the kecamatan that owns the member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(kecamatan::class, 'id_kecamatan', 'id');
    }

    /**
     * Get the jenis that owns the member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis(): BelongsTo
    {
        return $this->belongsTo(jenis_member::class, 'id_jenis', 'id_jenis');
    }
}
