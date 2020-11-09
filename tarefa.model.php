<?php
/*
	os atributos que foram criados são iguais as colunas feitas no banco de dados php_com_pdo.

*/

class Tarefa {
	private $id;
	private $id_status;
	private $tarefa; // -> tarefa escrita na front end nova_tarefa.php.
	private $data_cadastro;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>