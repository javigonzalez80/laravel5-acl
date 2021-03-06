<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	/**
	 * The database table used by the model.
	 */
	protected $table = 'roles';
	
	/**
	 * The attributes that are mass assignable.
	 */
	protected $fillable = ['name', 'description'];
	
	/**
	 * Get the permissions for the role.
	 */
	public function permissions()
	{
		return $this->belongsToMany('App\Permission')->withTimestamps();
	}
	
	/**
	 * Get the users for the role.
	 */
	public function users()
	{
		return $this->hasMany('App\User');
	}
	
	/**
	 * Get all the permissions.
	 */
	public function getPermissionListAttribute()
	{
		return $this->permissions->lists('id');
	}

}
