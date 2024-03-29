<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // Inisialisasi data pegawai secara statis
    public $pegawai = [
        ['nama' => 'Kimno', 'jabatan' => 'CEO', 'gaji' => 200000, 'pendidikan' => 'SD'],
        ['nama' => 'James', 'jabatan' => 'Staff', 'gaji' => 8000, 'pendidikan' => 'SMP'],
        ['nama' => 'Doe', 'jabatan' => 'COO', 'gaji' => 50000, 'pendidikan' => 'S1'],
        ['nama' => 'Jane', 'jabatan' => 'Staff', 'gaji' => 3000, 'pendidikan' => 'S2'],
        ['nama' => 'Marie', 'jabatan' => 'CTO', 'gaji' => 20000, 'pendidikan' => 'SMA'],
        ['nama' => 'Smith', 'jabatan' => 'CIO', 'gaji' => 80000, 'pendidikan' => 'SMK'],
        ['nama' => 'John Doe', 'jabatan' => 'Manager', 'gaji' => 5000, 'pendidikan' => 'S1'],
        ['nama' => 'Jane Smith', 'jabatan' => 'Staff', 'gaji' => 3000, 'pendidikan' => 'D3'],
        // Tambahkan data pegawai lainnya
    ];

    public function getAllPegawai()
    {
        return $this->pegawai;
    }
}
