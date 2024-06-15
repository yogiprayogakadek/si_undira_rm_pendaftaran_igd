<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = str_replace('-','',Uuid::uuid4()->getHex());
        });
    }

    public function triase()
    {
        return $this->hasOne(Triase::class, 'pengguna_id');
    }

    public function asesmen()
    {
        return $this->hasOne(Asesmen::class, 'pengguna_id');
    }

    public function catatanEdukasi()
    {
        return $this->hasOne(CatatanEdukasi::class, 'pengguna_id');
    }

    public function ringkasanKondisi()
    {
        return $this->hasOne(RingkasanKondisi::class, 'pengguna_id');
    }
}