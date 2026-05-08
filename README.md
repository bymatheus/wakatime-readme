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

Safari                   14 hrs 20 mins      ████████░░░░░░░░░░░░░░░░░     30.08%
ChatGPT                  12 hrs 31 mins      ███████░░░░░░░░░░░░░░░░░░     26.27%
Unknown Editor           6 hrs 30 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.65%
Warp                     4 hrs 45 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.97%
PhpStorm                 4 hrs 38 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.72%
Postman                  2 hrs 16 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.78%
Spotify                  2 hrs 9 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.54%
Notion                   24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.85%
Slack                    4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
```
```text
💬 Linguagem

Other                    25 hrs 14 mins      █████████████░░░░░░░░░░░░     52.95%
PHP                      12 hrs 46 mins      ███████░░░░░░░░░░░░░░░░░░     26.78%
HTTP Request             5 hrs 55 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.43%
Blade Template           1 hr 17 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       2.7%
JSON                     42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.48%
Makefile                 24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.85%
Markdown                 23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
NEON                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.62%
.env file                12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.45%
XML                      7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.26%
Text                     4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
SCSS                     4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
SQL                      4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
Bash                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
Log                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
YAML                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
TypeScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      47 hrs 40 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   22 hrs 48 mins      ████████████░░░░░░░░░░░░░     47.83%
Browsing                 13 hrs 55 mins      ███████░░░░░░░░░░░░░░░░░░      29.2%
AI Coding                8 hrs 8 mins        ████░░░░░░░░░░░░░░░░░░░░░     17.06%
Debugging                2 hrs 11 mins       █░░░░░░░░░░░░░░░░░░░░░░░░       4.6%
Writing Docs             31 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.1%
Communicating            4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Writing Tests            2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
```
