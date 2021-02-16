![wakatime-readme](https://socialify.git.ci/bymatheus/wakatime-readme/image?description=1&descriptionEditable=Metricas%20semanais%20do%20Wakatime%20no%20README%20do%20seu%20perfil.&font=Raleway&forks=1&language=1&owner=1&pattern=Circuit%20Board&stargazers=1&theme=Dark)

[WakaTime](https://wakatime.com) Metricas semanais do Wakatime no README do seu perfil. <br>
Inspirado no [projeto](https://github.com/athul/waka-readme) feito em Python do [Athul](https://github.com/athul).
___

#Suas métricas atualizadas diariamente.
Este script usa a API do WAKATIME para atualizar seu readme diariamente com suas métricas de desenvolvimento.

___

## Como funciona

###1. Wakatime
Você precisa criar uma conta no wakatime <br>
[Clique aqui para cria-la.](https://wakatime.com) 

###2. Download
Clone ou baixe este projeto e cole dentro do repositório do seu perfil <nickname/nickname>.

###3. Escrevendo seus dados no readme
- Dentro da estrutura do projeto você vai entrar o diretorio **markdown**;  
- No diretório, você vai encontrar dois arquivos *.md*;
- TOP.md e BOTTOM.md;
<br><br>
- O seu README.md vai ser separado em dois arquivos e em um scrip. 
- O top responsavel pela parte de cima do seu README 
- BOTTOM pela parte que sucede as metricas consumidas da API do WAKATIME.<br>

> Lembre-se de não editar o README.md que se encontra na raiz do repositório, todo o conteúdo será deletado a cada atualização e sobreposto com os dados do markdown/TOP e markdown/BOTTOM

###3. Inserindo seu nick no WAKATIME
- No arquivo **cron.php** você vai encontrar um objeto sendo instanciado, com uma string sendo enviada.
- Insira seu NICKNAME do WAKATIME.

```php
use MplusC\WakatimeReadme\SearchEngine;

require 'vendor/autoload.php';

$search = new SearchEngine();
$search->process('SeuNickname');
```

###4. Commitando
Você pode escolher em commitar o README atualizado, ou esperar que o CRON JOB do GitHub o faça. <br>

####Caso queira enviar atualizado, você precisa ter o *PHP 8* instalado na sua maquina.
```composer
composer update
composer semanal-update 
```

####Caso queira aguardar o cron job ser rodado 
```git 
git add .
git commit -m "Adicionando estrutura do scrip"
git push origin main
```

>O cron job está agendado para rodar todos os dias as 21:30 UTC (00:30 CET-3) 


### Alterando o cronjob
- Na pasta .github/workflows você encontrará o arquivo php.yml
- Basta alterar a hora que gostaria que o cron fosse rodado
- [Auxilio para criar um cronjob](https://crontab.guru)

```yml
name: PHP Composer

on:
  workflow_dispatch:
  schedule:
    - cron: "5 21 * * *"

jobs:
  build:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2

      - name: Update composer
        run: composer update

      - name: Update stats
        run: composer semanal-update
```

### Pronto, seu readme sempre atualizado com suas métricas, essas são as minhas.

___