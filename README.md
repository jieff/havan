# Desafio de Programação Jornada Labs HAVAN



## Começando

​	

​	Para executar o projeto, será necessário instalar o servidor de aplicação **APACHE** o banco de dados **MySQL**, e o **GIT BASH** para clonarmos a aplicação do GitHub, segue abaixo o link para download da distribuição apache contendo as ferramentas acima citadas, mas link para fazer o download do git bash.

* ([Download XAMPP (apachefriends.org)](https://www.apachefriends.org/pt_br/download.html)) 

* ([Git - Downloads (git-scm.com)](https://git-scm.com/downloads))

  

## Desenvolvimento



- #### Clonando a Aplicação

​	

​	Para iniciar o desenvolvimento, é necessário  criar uma pasta dentro do diretório **./htdocs**  com o nome que desejar, como no exemplo abaixo:

```
C:\xampp\htdocs\havan 
```

​	Dentro da pasta criada, clique com o botão direito do mouse e selecione a opção **Git Bash Here**:

![image](https://user-images.githubusercontent.com/16438327/118412140-bb4d5f80-b66e-11eb-9f4a-c3007cdaea63.png)


​	A partir desse momento iremos criar nosso repositório local e clonar a nossa aplicação:

```
$ git init 
```

​	A primeira coisa que você deve fazer ao instalar Git é configurar seu nome de usuário e endereço de e-mail. Isto é importante porque cada *commit* usa esta informação, e ela é carimbada de forma imutável nos *commits* que você começa a criar:

```
$ git config --global user.name "Fulano de Tal"
$ git config --global user.email fulanodetal@exemplo.br
```

​	Vamos clonar nossa aplicação com o comando abaixo:

```
$ git clone https://github.com/jieff/havan.git
```



- #### Iniciando o Servidor Apache e o SGBD MySQL

  Com o XAMPP instalado, inicie os serviços conforme imagem abaixo: 

  

  ![image](https://user-images.githubusercontent.com/16438327/118412207-15e6bb80-b66f-11eb-8bef-8c4cca7f5d0e.png)


- #### Importando a Base de Dados

  

  ​	Para importa a nossa base de dados da nossa aplicação precisamos acessar o nosso SGBD MySQL através do endereço abaixo em um navegador de sua preferência:

  ```
  http://localhost/phpmyadmin/
  ```

  ​	Localize a aba **importar** na parte superior do phpMyAdmin, mais abaixo o botão **Escolher Arquivo**, e procure na raiz do nosso projeto os arquivos **operacoes.sql** e **cambio.sql**, em seguida clique no botão **Executar** no canto direito inferior da nossa imagem.  

  ![image](https://user-images.githubusercontent.com/16438327/118412414-28adc000-b670-11eb-8eee-d45002a727ab.png)

  
  **Parabéns!!!** Agora só precisa ir até o navegador de preferência e digitar a seguinte url:

  ```
  http://localhost/havan
  ```

  

## Recursos

​     Inicialmente o sistema permite cadastrar anúncios, com os campos nome do anúncio, cliente, data de inicio e data de termino, realizar consultas dos anúncios cadastrados e fornecer um relatório contendo o valor investido, a quantidade máxima de visualizações, quantidade máxima de cliques e quantidade máxima de compartilhamentos. Os relatórios poderão ser filtrados por intervalo de tempo e cliente.     

## Contribuições

Contribuições são sempre bem-vindas!









