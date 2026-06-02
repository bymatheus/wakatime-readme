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

ChatGPT                  29 hrs 32 mins      ██████████████░░░░░░░░░░░     54.34%
Claude Code              9 hrs 56 mins       █████░░░░░░░░░░░░░░░░░░░░     18.29%
PhpStorm                 6 hrs 25 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.83%
Unknown Editor           3 hrs 39 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.72%
Spotify                  1 hr 53 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.48%
Notion                   1 hr 11 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.18%
Safari                   40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Postman                  30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.92%
Slack                    28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.86%
Miro                     4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
```
```text
💬 Linguagem

Other                    20 hrs 59 mins      ██████████░░░░░░░░░░░░░░░      38.6%
YAML                     8 hrs 53 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.34%
PHP                      6 hrs 45 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.43%
Markdown                 4 hrs 54 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.04%
.env file                3 hrs 9 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       5.8%
Makefile                 2 hrs 55 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.37%
SQL                      1 hr 11 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       2.2%
Docker                   1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.15%
Bash                     1 hr 7 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      2.07%
JSON                     51 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.56%
Blade Template           34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Nginx configuration file 34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.05%
HTTP Request             30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.92%
NEON                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.54%
Apache Config            9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
JavaScript               7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
textmate                 5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
XML                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Shell Script             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Image (svg)              0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
HTML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      54 hrs 22 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                30 hrs 24 mins      ██████████████░░░░░░░░░░░     55.93%
Coding                   20 hrs 14 mins      █████████░░░░░░░░░░░░░░░░     37.24%
Writing Docs             2 hrs 3 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.79%
Browsing                 40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Debugging                30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.92%
Communicating            28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.86%
Planning                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Writing Tests            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
