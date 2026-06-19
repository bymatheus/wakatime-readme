![wakatime-readme](https://socialify.git.ci/bymatheus/wakatime-readme/image?description=1&descriptionEditable=M%C3%A9tricas%20semanais%20do%20Wakatime%20no%20seu%20README%20de%20perfil.&font=KoHo&forks=1&language=1&owner=1&pattern=Signal&stargazers=1&theme=Dark)

[WakaTime](https://wakatime.com) Metricas semanais do Wakatime no README do seu perfil. <br>
Inspirado no [projeto](https://github.com/athul/waka-readme) feito em Python do [Athul](https://github.com/athul).
___

# Suas métricas atualizadas diariamente.
Este script usa a API do WAKATIME para atualizar seu readme diariamente com suas métricas de desenvolvimento.

___

## Como funciona

### 1. Wakatime
Você precisa criar uma conta no wakatime <br>
[Clique aqui para cria-la.](https://wakatime.com) 

### 2. Download
Clone ou baixe este projeto e cole dentro do repositório do seu perfil <nickname/nickname>.

### 3. Customizando o readme com seus dados
- Dentro da estrutura do projeto você vai entrar o diretorio **markdown**;  
- No diretório, você vai encontrar dois arquivos *.md*;
- TOP.md e BOTTOM.md.
<br><br>
- O seu README.md vai ser separado em três partes; 
- O TOP.md, responsável pela parte de cima do seu README;
- O meio, criado com as métricas do WAKATIME;
- E o BOTTOM.md, finalizando o arquivo README.md.<br>

> Ambos arquivos dentro do diretório MARKDOWN foram criados para você customizar o seu README.md

> Lembre-se de não editar o README.md que se encontra na raiz do repositório, todo o conteúdo será deletado a cada atualização e sobreposto com os dados do ./markdown/TOP e ./markdown/BOTTOM

### 4. Inserindo seu nick no WAKATIME
- No arquivo **cron.php** você vai encontrar um objeto sendo instânciado e um atributo sendo enviado como parâmetro para o construtor do objeto;
- Esse atributo se trata do NICKNAME do WAKATIME;
- Você precisa alterar o atributo para seu NICKNAME do WAKATIME.

```php
use MplusC\WakatimeReadme\SearchEngine;

require 'vendor/autoload.php';

$search = new SearchEngine('@SeuNickname');
$search->process();
```

### 5. Commitando
Você pode escolher entre commitar o README já atualizado ou esperar que a action do GitHub o faça. <br>

#### Caso queira enviar atualizado, você precisa ter o *PHP 8* e o *COMPOSER* instalados na sua maquina, e rodar os seguintes comandos no terminal.
```composer
composer update
composer semanal-update 
```

#### Caso queira aguardar o cron job ser rodado 
```git 
git add .
git commit -m "Sua mensagem de commit"
git push origin main
```

>O cron job está agendado para rodar todos os dias as 21:30 UTC (00:30 CET-3) 

### Alterando o cron job
Caso queira editar a action:

- Na pasta .github/workflows você encontrará o arquivo php.yml
- Basta alterar a hora que gostaria que o cron fosse rodado
- [Auxilio para criar um cron job](https://crontab.guru)

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

### Pronto, seu readme sempre atualizado com suas métricas, essas são as minhas:

___
```text
💡 Editor

Claude Code              17 hrs 16 mins      ██████████░░░░░░░░░░░░░░░     40.25%
ChatGPT                  16 hrs 45 mins      ██████████░░░░░░░░░░░░░░░     39.03%
Notion                   3 hrs 34 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.32%
PhpStorm                 2 hrs 35 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.06%
Spotify                  2 hrs 28 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.75%
Postman                  15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.59%
```
```text
💬 Linguagem

PHP                      14 hrs 10 mins      ████████░░░░░░░░░░░░░░░░░     33.04%
Other                    13 hrs 2 mins       ████████░░░░░░░░░░░░░░░░░     30.37%
Markdown                 5 hrs 30 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.82%
Blade Template           1 hr 35 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.72%
.env file                1 hr 33 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.63%
Bash                     1 hr 27 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.39%
SQL                      1 hr 14 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.89%
JavaScript               1 hr 2 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      2.43%
JSON                     53 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.08%
SCSS                     47 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.83%
YAML                     29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.14%
XML                      25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░         1%
Makefile                 23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.92%
HTTP Request             15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.59%
Text                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Shell Script             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
```text
💻 Sistema Operacional

Mac                      42 hrs 55 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                31 hrs 37 mins      ██████████████████░░░░░░░     73.68%
Coding                   8 hrs 44 mins       █████░░░░░░░░░░░░░░░░░░░░     20.36%
Writing Docs             2 hrs 18 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.37%
Debugging                15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.59%
```
