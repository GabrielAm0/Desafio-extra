# Desafio-extra

Aplicação WEB em PHP de cadastro de Clientes.

=====
Com um extra, tela de login funcional, url amigável com rotas.
Apenas há um problema, os cadastros no banco de dados conforme foi solicitado não carregam, quebrei muito a cabeça para achar o erro mas não consegui corrigir, caso você programador saiba corrigir e me ajudar estou de braços abertos
=====

Para utilizar esta aplicação em seu computador siga estes passos:

Baixe e instale o XAMPP:
https://www.apachefriends.org/pt_br/index.html

Após feito isto será necessário executar o programa e clicar em START nos módulos referentes ao APACHE E O MySQL: Segue imagem

![image](https://user-images.githubusercontent.com/90906766/235634479-7c34042c-cd02-4320-af9a-c57745adf320.png)

Após isto acesse o link
http://localhost/phpmyadmin/index.php?route=/#

Este link é para acessar o phpMYAdmin, que é um gerenciador de banco de dados com interface gráfica via WEB.

Após isto clique novo, para criar um banco de dados novo.
Ele deve ser nomeado de "desafio" e estar no conjunto de caracterers "utf8_general_ci".
Após isto deve ser criada uma tabela com o nome "registros" com 7 linhas, segue um print com a configuração de cada linha:

![image](https://user-images.githubusercontent.com/90906766/235648609-ec093422-6174-4cea-9e1c-c9c2aeda87e8.png)

Após isto clique em Guardar.

Após isto clique novamente em novo, para criar um banco de dados novo.
Ele deve ser nomeado de "login" e estar no conjunto de caracterers "utf8_general_ci".
Após isto deve ser criada uma tabela com o nome "usuario" com 4 linhas, segue um print com a configuração de cada linha:

![image](https://user-images.githubusercontent.com/90906766/235651621-66e08bf8-284e-4fb7-ab19-7781fb52769b.png)

Após isto clique em Guardar.

Após isto baixe os arquivos do projeto, abra a pasta Desafio-extra-main e copie todos os arquivos dentro dela. 

Após isto vá no caminho onde você instalou o XAMPP e acesse a pasta "htdocs" (Normalmente o caminho é "C:\xampp\htdocs"), e crie uma pasta chamada Desafio para dentro da pasta "htdocs". (Caso tenha feito o passoa a passo para ver apenas o desafio como foi pedido, peço que remeie a pasta do anterior para outro nome, para que este extra funcione corretamente.)
Depois disto cole todos os arquivos dentro de Desafio-extra-main dentro da pasta Desafio que você criou.

Após isto basta acessar em seu navegador o link "http://localhost/Desafio" para acessar o projeto.
