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

ChatGPT                  17 hrs 23 mins      ████████████░░░░░░░░░░░░░     47.21%
PhpStorm                 5 hrs 37 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.26%
Claude Code              4 hrs 47 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.99%
Unknown Editor           3 hrs 39 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.91%
Spotify                  2 hrs 15 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.11%
Notion                   1 hr 22 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.73%
Postman                  40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.85%
Miro                     37 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.68%
Slack                    28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.27%
```
```text
💬 Linguagem

Other                    20 hrs 8 mins       ██████████████░░░░░░░░░░░     54.67%
YAML                     3 hrs 20 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.08%
Markdown                 2 hrs 55 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.95%
PHP                      2 hrs 44 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.43%
.env file                1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       3.2%
Docker                   1 hr 9 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.16%
JSON                     1 hr 7 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.04%
Makefile                 46 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.12%
NEON                     42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.9%
HTTP Request             39 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.78%
Bash                     39 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.77%
Blade Template           35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.63%
SCSS                     19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.9%
Apache Config            16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.75%
JavaScript               7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.33%
SQL                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
HTML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      36 hrs 51 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   19 hrs 9 mins       █████████████░░░░░░░░░░░░        52%
AI Coding                13 hrs 30 mins      █████████░░░░░░░░░░░░░░░░     36.64%
Writing Docs             2 hrs 31 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.83%
Debugging                39 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.78%
Planning                 32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.47%
Communicating            28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.27%
Writing Tests            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
