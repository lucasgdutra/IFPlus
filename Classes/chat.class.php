<?php
include 'defines.php';


class BD{
	private static $conn;

	public function __construct(){}

	public static function conn(){
		if(is_null(self::$conn)){
			self::$conn = new PDO('mysql:host='.HOST.';dbname='.DB.'', ''.USER.'', ''.PASS.'');
		}

        return self::$conn;
	}
}



if (isset($_POST['mensagem'])) {
    
    BD::conn();

    $mensagem = utf8_decode(strip_tags(trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING))));
    $de = (int) $_POST['de'];
    $para = (int) $_POST['para'];

    if ($mensagem != '') {
        $insert = BD::conn()->prepare("INSERT INTO `mensagem` (usuario_id_remetente, usuario_id_destinatario, mensagem, time, status) VALUES (?, ?, ?, ?, ?)");
        $arrayInsert = array($de, $para, $mensagem, time(), 0);
        if ($insert->execute($arrayInsert)) {
            echo 'ok';
        } else {
            echo 'no';
        }
    }
}
?>