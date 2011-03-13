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
	private $_id;

	public function authenticate()
	{
		$user = User::model()->find('LOWER(username) = ?', array($this->username));
		if(!$user)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->errorCode=self::ERROR_NONE;
			$this->_id = $user->id;
            $this->setState('user', $user);
			$this->setUserSession($user);
			//$user->afterLogin();
		}

		return !$this->errorCode;
	}

	private function setUserSession($user)
	{
		$session = Yii::app()->session;
		$session['id'] = $user->id;
		$session['username'] = $user->username;
	}
}