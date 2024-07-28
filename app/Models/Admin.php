<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, Notifiable;
    protected $guard = 'admin'; // Menentukan guard yang digunakan untuk autentikasi
    protected $table = 'admin';
    protected $primaryKey = 'Id_admin'; 
    public $incrementing = true;
    protected $fillable = [
        'nama_admin',
        'alamat',
        'gender',
        'no_hp',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
