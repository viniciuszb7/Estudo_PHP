<?php
class Usuario
{

    private $userid;
    private $deslogin;
    private $desenha;


    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $value;
    }


    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin)
    {
        $this->deslogin = $value;
    }

    public function getDesenha()
    {
        return $this->desenha;
    }

    public function setDesenha($desenha)
    {
        $this->desenha = $value;
    }

    public function loadByid($idd){

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuario WHERE id = :ID", array(
            ":ID" => $idd
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->getUserid($row['userid']);
            $this->setDeslogin($row['deslogin']);
            $this->setDesenha($row['desenha']);
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "userid" => $this->getUserid(),
            "deslogin" => $this->getDeslogin(),
            "desenha" => $this->getDesenha()
        ));

    }

}

 ?>