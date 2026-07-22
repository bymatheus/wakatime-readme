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

Safari                   25 hrs 42 mins      ███████████░░░░░░░░░░░░░░     43.81%
Claude Code              12 hrs 41 mins      █████░░░░░░░░░░░░░░░░░░░░     21.63%
ChatGPT                  7 hrs 9 mins        ███░░░░░░░░░░░░░░░░░░░░░░     12.19%
Warp                     5 hrs 38 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.62%
ChatGPTClassic           4 hrs 20 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.39%
Notion                   1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.09%
Spotify                  50 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
PhpStorm                 26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.77%
Zed                      22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.64%
Discord                  14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Other                    15 hrs 17 mins      ███████░░░░░░░░░░░░░░░░░░     26.05%
Markdown                 13 hrs 46 mins      ██████░░░░░░░░░░░░░░░░░░░     23.46%
PHP                      10 hrs 11 mins      ████░░░░░░░░░░░░░░░░░░░░░     17.37%
Bash                     7 hrs 20 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.52%
HTML                     3 hrs 44 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.38%
INI                      2 hrs 50 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.83%
JSON                     1 hr 46 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.01%
YAML                     1 hr 35 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.72%
Docker                   56 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.6%
Makefile                 27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.77%
CSS                      13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.39%
Apache Config            7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
HTTP Request             5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
.env file                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Git Config               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Python                   2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
XML                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      58 hrs 40 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                26 hrs 17 mins      ███████████░░░░░░░░░░░░░░     44.82%
Browsing                 19 hrs 33 mins      ████████░░░░░░░░░░░░░░░░░     33.33%
Coding                   11 hrs 46 mins      █████░░░░░░░░░░░░░░░░░░░░     20.07%
Writing Docs             46 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.32%
Code Reviewing           15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.45%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
