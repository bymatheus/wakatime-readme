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

ChatGPT                  10 hrs 45 mins      ████████░░░░░░░░░░░░░░░░░     30.65%
PhpStorm                 9 hrs 27 mins       ███████░░░░░░░░░░░░░░░░░░     26.93%
Claude Code              6 hrs 4 mins        ████░░░░░░░░░░░░░░░░░░░░░      17.3%
Spotify                  3 hrs 31 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.06%
Notion                   2 hrs 11 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.22%
Postman                  1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.37%
Miro                     52 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.49%
Safari                   44 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.09%
Slack                    18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.88%
```
```text
💬 Linguagem

Other                    17 hrs 44 mins      █████████████░░░░░░░░░░░░     50.57%
Blade Template           7 hrs 41 mins       █████░░░░░░░░░░░░░░░░░░░░     21.91%
PHP                      3 hrs 20 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.52%
SQL                      1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.49%
HTTP Request             1 hr 6 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.15%
NEON                     53 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.54%
YAML                     36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.73%
SCSS                     34 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.64%
JSON                     28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.34%
Markdown                 27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.3%
Bash                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
.env file                15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.75%
CSS                      14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
JavaScript               4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
GitIgnore file           4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
Log                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
textmate                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      35 hrs 5 mins       █████████████████████████       100%
```
```text
📦 Categoria

Coding                   22 hrs 31 mins      ████████████████░░░░░░░░░     64.17%
AI Coding                7 hrs 6 mins        █████░░░░░░░░░░░░░░░░░░░░     20.26%
Writing Docs             2 hrs 26 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.96%
Debugging                1 hr 6 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.15%
Planning                 52 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.48%
Browsing                 44 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.09%
Communicating            18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.88%
```
