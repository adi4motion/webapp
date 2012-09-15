<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;
 
    public function authenticate()
    {
        $record=Users::model()->findByAttributes(array('username'=>$this->username));
        if(!empty($record))
        {
            if(!empty($record->clientId))
            {
                $user= Client::model ()->findByPk ($record->clientId);
                $password=$user->parola;
                $userId=$user->clientId;
            }
            else
            if(!empty($record->furnizorId))
            {
                $user= Client::model ()->findByPk ($record->furnizorId);
                $password=$user->parola;
                $userId=$user->furnizorId;
            }
        }
        
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($password!==$this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
       
            $this->id=$userId;
            $this->setState('roles', $record->role);            
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}