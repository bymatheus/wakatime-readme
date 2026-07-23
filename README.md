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

Safari                   27 hrs 4 mins       ███████████░░░░░░░░░░░░░░     43.36%
Claude Code              14 hrs 33 mins      ██████░░░░░░░░░░░░░░░░░░░     23.31%
ChatGPTClassic           6 hrs 35 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.55%
ChatGPT                  5 hrs 42 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.15%
Warp                     5 hrs 5 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      8.15%
Notion                   1 hr 33 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.49%
Spotify                  45 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.22%
PhpStorm                 41 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.1%
Discord                  13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.35%
Zed                      10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Markdown                 16 hrs 37 mins      ███████░░░░░░░░░░░░░░░░░░     26.62%
Other                    14 hrs 54 mins      ██████░░░░░░░░░░░░░░░░░░░     23.87%
PHP                      13 hrs 25 mins      █████░░░░░░░░░░░░░░░░░░░░     21.51%
Bash                     7 hrs 49 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.54%
HTML                     3 hrs 44 mins       █░░░░░░░░░░░░░░░░░░░░░░░░         6%
INI                      2 hrs 12 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      3.54%
Docker                   55 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.49%
YAML                     54 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.44%
.env file                26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.71%
JSON                     19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.53%
Makefile                 16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
CSS                      13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.36%
XML                      9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.26%
Text                     7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
HTTP Request             5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Git Config               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
Python                   2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      62 hrs 26 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                28 hrs 10 mins      ███████████░░░░░░░░░░░░░░     45.12%
Browsing                 21 hrs 12 mins      ████████░░░░░░░░░░░░░░░░░     33.96%
Coding                   11 hrs 47 mins      █████░░░░░░░░░░░░░░░░░░░░     18.89%
Writing Docs             1 hr                ░░░░░░░░░░░░░░░░░░░░░░░░░      1.61%
Code Reviewing           15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
