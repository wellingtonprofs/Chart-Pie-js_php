<?php

	$conn = new mysqli("localhost", "root", "", "meu_sistema");

	$out = array();

	$sql = "SELECT nome, COUNT(nome) AS Total FROM imagens GROUP BY nome";
	$query = $conn->query($sql);

	while($row=$query->fetch_array()){
	    $data[] = $row;


		$data[] = array(
			'nome'		=>	$row["nome"],
			'total'			=>	$row["Total"],
			'color'			=>	'#' . rand(100000, 999999) . ''
		);
	}


	// retorno de um JSON //
	echo json_encode($data);
?>