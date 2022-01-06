<?php 

/*
4 - Função SequenciaCrescente($array)
Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível 
obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste 

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true

**/

function SequenciaCrescente($array) {
	for($i=0;$i<count($array);$i++) {
		
		$cont = 0;
		$aux = $array;
		
		unset($aux[$i]);
		
		$aux = explode(",", implode(",",$aux));
		
		foreach($aux as $a => $numero_atual) {
			$pos = $a + 1;
			$proximo_numero = isset($aux[$pos]) ? $aux[$pos] : "";
			
			if(!empty($proximo_numero) && $numero_atual < $proximo_numero) {
				$cont++;
			}
			
		}
		
		if($cont == (count($aux)-1)) {
			echo implode(", ",$array) . " : true<br />";
			return true;
			break;
		}
	}
	
	echo implode(", ",$array) . " : false <br />";
	
}


$arr = array();
$arr[] = array(1, 3, 2, 1);
$arr[] = array(1, 3, 2);
$arr[] = array(1, 2, 1, 2);
$arr[] = array(3, 6, 5, 8, 10, 20, 15);
$arr[] = array(1, 1, 2, 3, 4, 4);
$arr[] = array(1, 4, 10, 4, 2);
$arr[] = array(10, 1, 2, 3, 4, 5);
$arr[] = array(1, 1, 1, 2, 3);
$arr[] = array(0, -2, 5, 6);
$arr[] = array(1, 2, 3, 4, 5, 3, 5, 6);
$arr[] = array(40, 50, 60, 10, 20, 30);
$arr[] = array(1, 1);
$arr[] = array(1, 2, 5, 3, 5);
$arr[] = array(1, 2, 5, 5, 5);
$arr[] = array(10, 1, 2, 3, 4, 5, 6, 1);
$arr[] = array(1, 2, 3, 4, 3, 6);
$arr[] = array(1, 2, 3, 4, 99, 5, 6);
$arr[] = array(123, -17, -5, 1, 2, 3, 12, 43, 45);
$arr[] = array(3, 5, 67, 98, 3);

foreach($arr as $a => $b) {
	SequenciaCrescente($b);
}