<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToUjianMapping extends Model {

	//
	protected $table = 'guru_to_ujian_mapping';
	protected $fillable = array('NIP','KD_UJIAN');
}
