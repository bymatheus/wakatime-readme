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

Claude Code              21 hrs 23 mins      █████████░░░░░░░░░░░░░░░░     36.57%
ChatGPT                  15 hrs 7 mins       ██████░░░░░░░░░░░░░░░░░░░     25.86%
Safari                   11 hrs 32 mins      █████░░░░░░░░░░░░░░░░░░░░     19.73%
Warp                     4 hrs 53 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.35%
Spotify                  2 hrs 23 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.07%
Notion                   1 hr 52 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.22%
PhpStorm                 33 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
Zed                      30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.87%
Discord                  11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.33%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Other                    18 hrs 5 mins       ████████░░░░░░░░░░░░░░░░░     30.92%
PHP                      16 hrs 7 mins       ███████░░░░░░░░░░░░░░░░░░     27.55%
Markdown                 9 hrs 48 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.75%
YAML                     5 hrs 20 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.12%
INI                      2 hrs 50 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.86%
JSON                     1 hr 53 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.24%
Makefile                 1 hr 27 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.49%
Text                     33 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.95%
XML                      32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.93%
Python                   26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.76%
.env file                22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.65%
Nginx configuration file 16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Docker                   14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Bash                     10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
Apache Config            8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.23%
Git Config               6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
HTTP Request             5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Blade Template           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
TOML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      58 hrs 29 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                39 hrs 39 mins      █████████████████░░░░░░░░     67.79%
Coding                   11 hrs 4 mins       █████░░░░░░░░░░░░░░░░░░░░     18.93%
Browsing                 6 hrs 30 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.12%
Writing Docs             1 hr 14 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.12%
Code Reviewing           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
