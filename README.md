# uplexis
 
**Segue a nossa proposta de CASE!**

A ideia é que você realize todas as tarefas e nos encaminhe a resolução pelo GITHUB, ok?!
Caso tenha algum imprevisto, me avise e daremos um jeito, tudo bem?!
Tente fazer o máximo que conseguir! Não desista!

Assim que recebermos, o Fábio (gestor da área) irá avaliar e caso esteja dentro do que esperamos, agendamos um bate papo. Fique tranquilo, nesse primeiro momento faremos TODO o processo via Skype.

Vamos lá?
Você deverá desenvolver uma aplicação que utilize PHP 7 e Framework Laravel 5. A aplicação deve ser capaz de realizar uma requisição ao Blog da upLexis (http://www.uplexis.com.br/blog) e capturar artigos de acordo com a pesquisa realizada. 
Os dados devem ser salvos em um banco de dados MySQL.

**DETALHE**

Banco de Dados MySQL
- Criar tabela usuario (id, usuario, senha)
- Criar um usuário na tabela (id: 1, usuario: admin, senha: admin);
- Criar tabela artigos (id, id_usuario, titulo, link);

**TELAS**
- Tela de Login (usuário e senha)
- Autenticar utilizando a tabela de usuário
- Tela de Capturar (campo para digitar um texto e botão  Capturar)

Ao clicar no botão Capturar, realizar a busca no blog da upLexis, recuperar os artigos da primeira página da pesquisa (título e link), e salvar no banco de dados. Apresentar uma mensagem de sucesso ou erro
Tela para Exibir os Artigos
Exibir os artigos salvos no banco de dados (título e link) e um botão de excluir o artigo do banco de dados.

**REQUISITOS**
- PHP 7 e Laravel Framework 5
- Teste Automatizado
- MySQL
- Bootstrap
- Ajax

**EXEMPLO**
Buscar artigos com o termo “machine learning”. https://www.uplexis.com.br/blog/?s=machine+learning
Capturar os títulos abaixo e o link:
