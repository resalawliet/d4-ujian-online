<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToKelasMapping extends Model {

	//
	protected $table = 'guru_to_kelas_mapping';
	protected $fillable = array('NIP','KD_KELAS','START_DATE','END_DATE');

}
