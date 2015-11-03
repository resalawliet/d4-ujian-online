<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model {

	//
	protected $table = 'guru';
	protected $fillable = array('NIP', 'NUPTK', 'NAMA', 'TEMPAT_TANGGAL_LAHIR', 'JENIS_KELAMIN', 
	'ALAMAT', 'NO_TELEPON', 'IS_ACTIVE', 'USERNAME', 'PASSWORD');
}
