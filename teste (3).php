<?php
	include_once './Nome.php';
	include_once './NomeCompleto.php';
	#include_once './Funcionario.php';
	include_once './Gerente.php';
	include_once './AuxiliarProducao.php';

	$nome1 = new Nome();
	$nome1->setNome( 'Guilherme' );
	$nome1->setSobrenome( 'Carl' );
	$nome1->setIdade( 18 );
	$nome1->setCidade( 'Blumenau' );
	
	$nome2 = new NomeCompleto();
	$nome2->setNome( 'Lucas' );
	$nome2->setSobrenome( 'Nunes' );
	$nome2->setNomeCompleto( 'Lucas Nunes' );
	$nome2->setIdade( 19 );
	$nome2->setCidade( 'Blumenau' );
	
	//echo "Nome: {$nome1->getNome()}<br/>\n";
	//echo "Sobrenome: {$nome1->getSobrenome()}<br/>\n";
	//echo "Idade: {$nome1->getIdade()}<br/>\n";
	//echo "Cidade: {$nome1->getCidade()}<br/><br/>\n";
	
	//echo "Nome: {$nome2->getNome()}<br/>\n";
	//echo "Sobrenome: {$nome2->getSobrenome()}<br/>\n";
	//echo "Nome completo: {$nome2->getNome()} {$nome2->getSobrenome()}<br/>\n";
	//echo "Idade: {$nome2->getIdade()}<br/>\n";
	//echo "Cidade: {$nome2->getCidade()}<br/>\n";
	
	$alessandro = new Gerente();
	$alessandro->setSalario(10000);
	echo $alessandro->getSalario();
	
	echo '<br/>';
	
	$everton = new AuxiliarProducao();
	$everton->setSalario(10000);
	echo $everton->getSalario() . '<br/>';
	echo $everton->INSS(10000) . '<br/>';
	echo $everton->getHorario();
?>