<?php
class BancoDados {

    static $con; //Variável de controle da conexão
    static $host = "localhost";
    static $usuario = "root";
    static $senha = "";
    static $bancoDados = "desafioincluir";

    public static function conectarBanco() {
        self::$con = mysqli_connect(self::$host, self::$usuario, self::$senha, self::$bancoDados);
        header('Content-Type: text/html; charset=utf-8');
        mysqli_select_db(self::$con, self::$bancoDados);
        mysqli_query(self::$con, "'SET NAMES 'utf8'");
        mysqli_query(self::$con, 'SET character_set_connection=utf8');
        mysqli_query(self::$con, 'SET character_set_client=utf8');
        mysqli_query(self::$con, 'SET character_set_results=utf8');
        return self::$con;
    }

    public static function desconectarBanco() {
        mysqli_close(self::$con);
    }

}
