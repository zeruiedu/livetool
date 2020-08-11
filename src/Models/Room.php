<?php namespace Zeruiedu\LiveTool\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public $timestamps = true;

    protected $table = 'room';

    public function share(){

    	return $this->hasMany('Zeruiedu\LiveTool\Models\RoomShare', 'room_id', 'id');
    }
}
