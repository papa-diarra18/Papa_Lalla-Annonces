<?php

namespace Src\Models;

class Users extends BaseEntite
{
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;
    private string $tel;
    public function __construct(string $nom = '', string $prenom = '', string $email = '', string $password = '', string $tel = '')
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->tel = $tel;
    }
}
