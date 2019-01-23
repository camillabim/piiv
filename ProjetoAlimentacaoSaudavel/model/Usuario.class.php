<?php
/**
 * Created by PhpStorm.
 * User: Camilla
 * Date: 20/01/2019
 * Time: 22:12
 */

class Usuario
{
    private $id;
    private $primeironome;
    private $ultimonome;
    private $email;
    private $telefone;

    public function __construct()
    {
        $this->id=0;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrimeironome()
    {
        return $this->primeironome;
    }

    /**
     * @param mixed $primeironome
     */
    public function setPrimeironome($primeironome)
    {
        $this->primeironome = $primeironome;
    }

    /**
     * @return mixed
     */
    public function getUltimonome()
    {
        return $this->ultimonome;
    }

    /**
     * @param mixed $segundonome
     */
    public function setUltimonome($ultimonome)
    {
        $this->ultimonome = $ultimonome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }



}