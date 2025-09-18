README - API Pessoa (Tarefa do professor )

1) Importar banco:
   - rode o arquivo pessoa.sql no MySQL (cria DB PWIII + tabela Pessoa)

2) Ajustar conexão:
   - abra config/db.php e ajuste $user e $pass conforme seu MySQL

3) Estrutura de pastas recomendada:
   /projeto
     /config
       db.php
     /app
       /models
         PessoaModel.php
       /classes
         Pessoa.php
     /public
       index.php
       controlePessoa.php
       pessoa.php
       (opcional edit.php)

4) Testar:
   - acesse http://localhost/projeto/public/index.php
   - cadastre uma pessoa, verifique em pessoa.php

5) Observações:
   - Validações básicas já implementadas no controller (CPF / nome / telefone)
   - Para edição crie um edit.php que carrega os dados via model->getById() e envia action=update
   - Versione tudo no GitHub (repositório público) e envie o link conforme instruções do professor
