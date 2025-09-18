<h2>Variáveis em PHP</h2>
<p>As varáveis em PHP são Precedidas de $, e são case sensitive, ou seja, diferenciam maiúscula de minúscula, não é necessário informar o tipo de dado</p>
<?php
//Tipo texto
$nome="Josney da Silva";
//Tipo inteiro
$saldo=179;
//Tipo Real
$altura=1.82;
//Tipo Booleano
$status=true;
echo"<p>O Senhor $nome possuí o saldo de R$ $saldo e a altura $altura, seu Status no nosso sistema é $status";
?>
<h2>Arrays em PHP</h2>
<p>O Array é o Vetor, utilizamos quando é necessário armazenar vários valores de uma vez, podemos manipular o banco de dados como um Array também, quando o retorno do banco resulta em várias linhas</p>
<?php
//Declarando um Array e preenchendo com dados
$filmes=array("O Chamado","Insidious","Sinais","Halloween","Sexta-feira 13");
//Preenchendo individualmente
$filmes[]="Invocação do Mal";
?>
<h3>Exibindo os Vetores</h3>
<p> é possível exibir todos os valores usando o comando print_r, mas normalmente usamos ele no momento de testar o código, para exibir vetores ou arquivo json <?php print_r($filmes);?>, assim fica a exibição.</p>

<h3>Constante</h3>
<p>Constante é um valor fixo durante a execução de uma página, só pode ser alterado quando o software para de rodar</p>
<?php
//Constante em PHP
define('TAXA',12);
echo("<p>".TAXA."</p>");
?>
<a href="includes/aritmeticos.php">Operadores Aritméticos</a>