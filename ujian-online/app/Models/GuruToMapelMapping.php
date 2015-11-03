<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToMapelMapping extends Model {

	//
	protected $table = 'guru_to_mapel_mapping';
	protected $fillable = array('NIP','KD_MAPEL','START_DATE','END_DATE');
}
