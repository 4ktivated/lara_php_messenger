<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class messege extends Model {

	protected $table = 'messeges';
	protected $guarded = [];
	protected $fillable = ['sender', 'recipient', 'messege', 'status',];

}
