# ecletic-system


Sistema de Loja de CDs
Documento de Especificação de Requisitos
Versão 1.0



Documento de Especificação de Requisitos
1.
REQUISITOS DO SISTEMA
1.1
REQUISITOS FUNCIONAIS

RF001 -Cliente
Cadastro e alteração de dados de clientes do sistema
RF002 - Cliente
Compra de um CD a partir do titulo
RF003 - Cliente
Compra de CD através da consulta pelo nome do Artista
RF004 - Cliente
Compra de Cd através da consulta pelo nome de uma 
música
RF005 - Cliente
Compra de CD através de consulta por gênero.
RF006 - Cliente
Listar os Cds mais vendidos
RF007 - Cliente
Listar as promoções
RF008 - Cliente
Fechar compra
RF009 - Administrador
Excluir e visualizar os usuários cadastrados
RF010 - Administrador 
Cadastrar, excluir, alterar e visualizar os Cds.
RF011 - Administrador
Colocar um Cd em promoção
RF012 - Administrador
Consultar e excluir compras realizadas por cada usuário.




1.2 REGRA DE NEGÓCIO

RN001
Cliente
O sistema deverá 
validar a entrada de seus usuários a partir de 
um login e uma senha.
RN002
Cliente
O sistema deverá permitir que somente usuários cadastrados 
possam comprar Cds. 
RN003
Cliente
O sistema deverá permitir que o administrador tenha acesso e o 
controle de 
todo o sistema.

1.3
REQUISITOS NÃO FUNCIONAIS

RNF001
Cliente
Usabilidade: O sistema deve conter uma interface simples 
para memorização, não pode dar vias para o usuário 
cometer erros graves, e caso ocorram erros, devem haver 
mecanismos que tratem, corrijam na medida do possível.

2.CASOS DE USO DO PROJETO 
3.3ATORES

A001
Cliente
Responsável por cadastrar-se no sistema, pesquisar e 
comprar CDs.
A002
Administrador
Responsável por excluir usuários, cadastrar Cds,
colocar Cds em promoção e visualizar as vendas.

3.4
CASOS DE USO


UC001
Cadastrar Usuário
UC002
Efetuar Login
UC003
Alterar dados do usuário
UC004
Comprar um Cd pelo titulo
UC005
Comprar CD pelo nome do Artista
UC006
Comprar Cd pelo 
nome de uma música
UC007
Comprar CD através de consulta por gênero.
UC008
Listar os Cds mais vendidos
UC009
Listar as promoções
UC010
Fechar compra
UC011
Excluir e visualizar os usuários cadastrados
UC012
Cadastrar Cds.
UC013
Visualizar Cds.
UC014
Excluir e alterar os Cds.
UC015
Colocar um Cd em promoção


UC001 - Cadastrar Usuário
Descrição:
1.
Ao acessar a tela principal da loja, o usuário deve clicar no botão cadastre-se.
2.
Preencher os seguintes dados: nome completo, email, CPF, telefone, login, senha e confirmação de senha.
3.
Clicar no botão enviar.
4.
O sistema será redirecionado para a tela de login.
Atores:
Cliente
Pré-condições:
Ter acesso ao sistema.
Pós-condições:
O ator poderá realizar login no sistema.

UC002 - Efetuar Login
Descrição:
Este caso de uso especifica a ação de autenticação que um usuário 
executa no sistema, com objetivo de se conectar na aplicação. Apenas usuários 
cadastrados podem se autenticar no sistema.
1.
O  usuário  fornece  seus  dados  básicos  de  autenticação  e,  após  a  val
idação  no 
sistema, o usuário torna-se apto a realizar operações da área restrita do sistema. 
2.
Os  usuários  se  dividem  em:  a)  cliente  (usuário  habilitado  a  comprar  cds),  b) 
administrador   (usuário   habilitado   a   realizar   as   configurações   e   ações   de 
administração do sistema).
Atores:
Cliente, Administrador
Pré-condições:
O ator deve estar cadastrado no sistema.
Pós-condições:
O ator fica habilitado a realizar ações na área restrita do sistema.

UC003 - Alterar Dados do Usuário
Descrição
1.
O usuário deve clicar no botão dados pessoais.
2.
Em seguida clicar no botão editar dados
3.
Preencher os novos dados 
4.
Clicar no botão Salvar alterações.
