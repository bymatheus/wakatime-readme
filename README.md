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

ChatGPT                  11 hrs 36 mins      █████████░░░░░░░░░░░░░░░░     37.19%
PhpStorm                 6 hrs 46 mins       █████░░░░░░░░░░░░░░░░░░░░     21.68%
Claude Code              5 hrs 58 mins       █████░░░░░░░░░░░░░░░░░░░░     19.14%
Spotify                  3 hrs 15 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.46%
Notion                   1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.95%
Postman                  56 mins             █░░░░░░░░░░░░░░░░░░░░░░░░         3%
Miro                     52 mins             █░░░░░░░░░░░░░░░░░░░░░░░░       2.8%
Slack                    18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
Safari                   15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
```
```text
💬 Linguagem

Other                    16 hrs 54 mins      ██████████████░░░░░░░░░░░     54.14%
Blade Template           6 hrs 13 mins       █████░░░░░░░░░░░░░░░░░░░░     19.94%
PHP                      3 hrs 14 mins       ███░░░░░░░░░░░░░░░░░░░░░░      10.4%
NEON                     53 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.85%
HTTP Request             51 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.76%
SCSS                     34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.83%
JSON                     28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.51%
Markdown                 27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.46%
YAML                     27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.44%
SQL                      24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.33%
CSS                      14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.79%
Apache Config            7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.39%
Bash                     5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
JavaScript               4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
GitIgnore file           4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
.env file                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.23%
Log                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
textmate                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      31 hrs 13 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   20 hrs 26 mins      ████████████████░░░░░░░░░     65.43%
AI Coding                7 hrs               ██████░░░░░░░░░░░░░░░░░░░     22.46%
Writing Docs             1 hr 29 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.77%
Planning                 52 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.78%
Debugging                51 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.76%
Communicating            18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
Browsing                 15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
```
