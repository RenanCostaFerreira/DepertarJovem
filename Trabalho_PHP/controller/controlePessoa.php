<?php
session_start();

/*
 Caminhos reais conforme a sua pasta:
   - config/conexao.php
   - model/modelPessoa.php
 Obs: aqui o controller está em controller/, então sobe 1 pasta com __DIR__ . '/../...'
*/

// caminhos esperados
$pathCon = __DIR__ . '/../config/conexao.php';
$pathModel = __DIR__ . '/../model/modelPessoa.php';

// debug rápido: verifique se os arquivos existem antes de requerer
if (!file_exists($pathCon)) {
    // imprime o caminho esperado e tenta mostrar o realpath (se existir)
    die("Arquivo de conexão NÃO encontrado em: $pathCon\nrealpath: " . (realpath($pathCon) ?: 'n/a'));
}
if (!file_exists($pathModel)) {
    die("Arquivo do model NÃO encontrado em: $pathModel\nrealpath: " . (realpath($pathModel) ?: 'n/a'));
}

// se passou nas checagens, require normalmente
require_once $pathCon;
require_once $pathModel;

// pega o pdo e instancia o model
$teste = new Conexao();
$pdo = $teste->getConexao();
$pessoaModel = new PessoaModel($pdo);
