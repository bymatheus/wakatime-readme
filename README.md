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

ChatGPT                  12 hrs 19 mins      ████████░░░░░░░░░░░░░░░░░     30.22%
PhpStorm                 11 hrs 25 mins      ███████░░░░░░░░░░░░░░░░░░     28.01%
Claude Code              5 hrs 46 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.17%
Spotify                  4 hrs 14 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.41%
Notion                   1 hr 59 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.87%
Postman                  1 hr 20 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.27%
Safari                   1 hr 12 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.96%
Warp                     1 hr 1 min          █░░░░░░░░░░░░░░░░░░░░░░░░      2.53%
Miro                     52 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.13%
Slack                    34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
```
```text
💬 Linguagem

Other                    21 hrs 34 mins      █████████████░░░░░░░░░░░░     52.89%
Blade Template           9 hrs 43 mins       ██████░░░░░░░░░░░░░░░░░░░     23.82%
PHP                      3 hrs 18 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.13%
HTTP Request             1 hr 22 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.38%
SQL                      1 hr 12 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.95%
YAML                     35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.47%
SCSS                     34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.41%
Markdown                 32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.32%
NEON                     29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.19%
JSON                     23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.98%
Bash                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
.env file                15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.64%
CSS                      14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.61%
JavaScript               4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
GitIgnore file           4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
Log                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
textmate                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      40 hrs 47 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   27 hrs 45 mins      █████████████████░░░░░░░░     68.04%
AI Coding                6 hrs 50 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.78%
Writing Docs             2 hrs 15 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.52%
Debugging                1 hr 17 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.15%
Browsing                 1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       2.9%
Planning                 51 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.12%
Communicating            34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
Code Reviewing           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
```
