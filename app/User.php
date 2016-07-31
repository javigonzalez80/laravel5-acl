<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 */
	protected $fillable = ['role_id', 'name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 */
	protected $hidden = ['password', 'remember_token'];
	
	/**
	 * Get the role that owns the user.
	 */
	public function role()
	{
		return $this->belongsTo('App\Role');
	}
	
	/**
	 * Checking if user has permission.
	 */
	public function hasPermission($permissionName)
    {
        foreach ($this->role->permissions()->get() as $permission)
        {
            if ($permission->name == $permissionName)
            {
                return true;
            }
        }

        return false;
    }

}
