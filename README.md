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

Claude Code              22 hrs 17 mins      ████████░░░░░░░░░░░░░░░░░     33.91%
Safari                   16 hrs 16 mins      ██████░░░░░░░░░░░░░░░░░░░     24.75%
ChatGPT                  15 hrs 31 mins      ██████░░░░░░░░░░░░░░░░░░░     23.61%
Warp                     7 hrs 3 mins        ███░░░░░░░░░░░░░░░░░░░░░░     10.74%
Spotify                  1 hr 59 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.04%
Notion                   59 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.5%
PhpStorm                 44 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.13%
Zed                      32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
Discord                  18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Other                    18 hrs 36 mins      ███████░░░░░░░░░░░░░░░░░░      28.3%
Markdown                 15 hrs 56 mins      ██████░░░░░░░░░░░░░░░░░░░     24.25%
PHP                      15 hrs 29 mins      ██████░░░░░░░░░░░░░░░░░░░     23.57%
YAML                     5 hrs 51 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.91%
INI                      2 hrs 50 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.33%
JSON                     1 hr 48 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.74%
Makefile                 1 hr 36 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.44%
Docker                   1 hr 9 mins         ░░░░░░░░░░░░░░░░░░░░░░░░░      1.76%
XML                      33 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.84%
.env file                26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.68%
Nginx configuration file 16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
HTML                     14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
Bash                     14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.36%
Python                   10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.26%
Git Config               9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
Apache Config            8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
HTTP Request             5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
TOML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      65 hrs 45 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                42 hrs 50 mins      ████████████████░░░░░░░░░     65.16%
Coding                   12 hrs 33 mins      █████░░░░░░░░░░░░░░░░░░░░      19.1%
Browsing                 9 hrs 57 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.15%
Writing Docs             21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.54%
Code Reviewing           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
