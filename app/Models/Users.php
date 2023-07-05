<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Users extends Model
{
    use HasFactory;
    protected $table = 'tb_users';
    protected $primaryKey = 'user_id';
    protected $guarded = '[]';
    protected $fillable = [
        'user_id',
        'user_email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_aktif'
    ];
    public function Pelanggan() :HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pel_id_user', 'user_id');     
    }
}
