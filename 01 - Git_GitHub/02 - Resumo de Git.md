============================
# COMANDOS BÁSICOS CLI
============================
dir		Lista diretório.

cd		Navega entre diretórios.
  cd <nome>	Avança para a pasta nomeada.
  cd ..		Volta um nível.
  cd <tab>	Autocompletar.

cls		Limpa a tela.

mkdir		Cria uma nova pasta.
  Ex: mkdir workspace

del		Apaga arquivos do diretório.

rmdir		Apaga diretório.
  Ex: rmdir <nome> /s /q	Apaga sem confirmação.



============================
# GIT
============================
### BLOBS
Objeto que guarda metadados dos arquivos.

### TREES
Armazenam as blobs na forma de metadados.

### COMMIT
É o projeto em si. Possui metadados com as trees, parentes, autor, mensagem e timestamp.

Commit é o projeto e ele possui trees.
As trees possuem blobs diversos.
Blobs armazenam os metadados e códigos.
Todos possuem sua própria "tag" única.



============================
# Chave SSH E TOKEN
============================

Chave SSH cria uma conexão segura com o GitHub.
Existe uma chave pública e uma privada.


## CRIANDO A CHAVE

 - A chave pública fica com o [Github](https://github.com/settings/keys).

No CLI, vamos gerar a chave:
 $ ssh-keygen -t ed25519 -C <seu_email>

Não mexa no local da chave.
Coloque a senha e confirme.
Pronto.
 
Para visualizar a chave, navegue até a pasta e depois visualize ela:
 $ cd /c/users/<usuario>/.ssh/
 $ ls
 $ cat <arquivo>.pub

Copie o resultado que começa com "ssh" e termina com seu email.

A chave privada fica na máquina.

Volte até o GitHub, dê um nome para a máquina em Title e a chave no campo abaixo.


## UTILIZANDO A CHAVE

Você precisa inicializar o _SSH Agent_.
 $ eval $(ssh-agent -s)

Ative a chave:
 $ ssh-add <chave sem o ".pub">


## CLONANDO UM REPOSITÓRIO PARA O PC
Use o comando:
 $ git clone <_CODE > Clone > SSH_>



============================
# AUTENTICAÇÃO SSL
============================




============================
# COMANDOS GIT BASH
============================

## Editar Nome de Usuário
git config --global unset user.name
git config --global user.name <nono username>

## Editar email de Usuário
git config --global unset user.email
git config --global user.email <novo email>


### git init
Inicia o Git.

###git status
Mostra o status atual do projeto.

### git add .
Adiciona todos os arquivos atuais ao stage.

### git commit -m "string..."
Sincroniza os os arquivos para o servidor.

### git push origin main
Envia tudo do local para o servidor.

### git clone <link>
Clona o repositório.