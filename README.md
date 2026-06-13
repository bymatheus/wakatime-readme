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

ChatGPT                  16 hrs 5 mins       ███████████░░░░░░░░░░░░░░     45.01%
Claude Code              12 hrs 2 mins       ████████░░░░░░░░░░░░░░░░░     33.67%
Notion                   2 hrs 36 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.29%
Spotify                  2 hrs 15 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.32%
PhpStorm                 2 hrs 13 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.24%
Postman                  31 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.48%
```
```text
💬 Linguagem

PHP                      10 hrs 39 mins      ███████░░░░░░░░░░░░░░░░░░     29.81%
Other                    10 hrs 2 mins       ███████░░░░░░░░░░░░░░░░░░      28.1%
Markdown                 5 hrs 32 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.51%
SQL                      2 hrs 57 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.26%
YAML                     1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.43%
Blade Template           1 hr 9 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.23%
.env file                54 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.55%
JSON                     49 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.31%
JavaScript               35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.66%
Bash                     25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.19%
Nginx configuration file 23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.1%
HTTP Request             21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
GitIgnore file           15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.72%
Makefile                 14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.66%
SCSS                     7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
XML                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💻 Sistema Operacional

Mac                      35 hrs 44 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                27 hrs 5 mins       ███████████████████░░░░░░     75.78%
Coding                   6 hrs 50 mins       █████░░░░░░░░░░░░░░░░░░░░     19.14%
Writing Docs             1 hr 27 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.09%
Debugging                21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
```
