<?php


//namespace conexaoPDO;

 class Conexao
{
    private $obj;

    /**
     * Conexao constructor.
     */
    public function __construct()
    {
        $this->Conectar(); //opcional
    }
    /**
     * metodo conectar.
     */
    private function Conectar()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $bd = 'login';
        $dsn = "mysql:host={$host};dbname ={$bd}";
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        try {
            $con = new PDO($dsn, $user, $pass, $option);
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }

    }

     /**
      * metodo executar SQL.
            */
    public function executeSQL($query, array $params = array()){

        $this->obj = $this->Conectar()->prepare($query);
        if (count($params) > 0):
            foreach ($params as $key => $value):
                $this->obj->bindValue($key,$value);
            endforeach;
            endif;

        return $this->obj->execute();
    }
    public function listarDados(){
        return $this->obj->fetchAll();
    }
}