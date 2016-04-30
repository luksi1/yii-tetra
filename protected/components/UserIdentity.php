<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{

		$options = Yii::app()->params['ldap'];

		$record=Users::model()->findByAttributes(array('username'=>$this->username));

		if ($record === null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;

		$connection = ldap_connect($options['host']);

		$bind_string = "cn=$this->username" . ",";
		$bind_string .= "ou=" . implode(",ou=",$options['ou']) . ",";
		$bind_string .= "dc=" . implode(",dc=",$options['dc']);

		if($connection)
		{
			$bind = @ldap_bind($connection, $bind_string, $this->password);
 
			if (!$bind) 
			{
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			}
				else 
			{	
				$this->errorCode = self::ERROR_NONE;
			}
		}

		return !$this->errorCode;

	}
}
