1. Em que ficheiro estão as rotas da aplicação web?
    - routes/web.php

2. Em que pasta estão as views? Como se chama a view da página de boas-vindas?
    - resources/views
    - welcome.blade.php

3. Em que ficheiro está o nome da base de dados? Porque é que esse ficheiro não vai para o GitHub?
    - .env
    - o .env nunca vai para o GitHub, já está no .gitignore . Tem a APP_KEY e as credenciais da base de dados.

B2. 
    Sem e(), /Ola/<h1>Ana mostra »«Ana» como título: o navegador interpreta o HTML. Um atacante pode enviar uma ligação com JavaScript (XXS). Com e() aparece o texto <h1>Ana.

b5. 
    /dobro/abc devolve 404: a restrição whereNumber faz com que a rota não corresponda.

d4.
    eventos/3 abre o evento com o id 3, eventos/99 dá erro 404 porque ainda não existe um evento com esse id e eventos/abc não abre porque "abc" não é um id válido

e.
    foi adicionado filtros para procurar melhor cada tipo de eventos

desafio pl02.
    foi adicionado um botão para mostrar os próximos eventos que vão acontecer desde o dia de hoje até mais para a frente