<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\ClienteSoap;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function login () 
    {
        /*
        $parametrosSoap = [
            'pmUserName' => $this->name,
            'pmUserPassword' => $this->password,
            'pmEncrypted' => '0',
        ];
        $soap = new ClienteSoap('http://189.17.26.241:8080/g5-senior-services/sapiens_SyncMCWFUsers');
        return $soap->executar('AuthenticateJAAS', $parametrosSoap);
        */
        if ( $this->name == 'thiago.dias' || $this->name == 'senior') {
            if ($this->password == 'testeteste') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
