<?php 

class User_Model extends Conn{
    private $id, $login, $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }
 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function listUser($user_init){
        $sql = new Conn();
        return $sql->select("SELECT * FROM tb_user WHERE login = '{$user_init}'");
    }

    public function login(){
        $sql = new Conn();

        $resultado = $sql->select("SELECT * FROM tb_user WHERE login = :login AND pass = :pass", [
            ":login" => $this->getLogin(),
            ":pass"  => $this->getPassword()
        ]);

        if(count($resultado) > 0){
            session_start();
            $_SESSION['user_login'] = $this->getLogin();
            header("Location: ../panel/index.php");
        }else{
            unset ($_SESSION['id']);
            header("Location: ../login.php?erro=SenhaIncorreta");
        }
    }
}