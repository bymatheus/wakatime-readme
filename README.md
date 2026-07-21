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

Safari                   23 hrs 29 mins      ██████████░░░░░░░░░░░░░░░     40.08%
Claude Code              13 hrs 48 mins      ██████░░░░░░░░░░░░░░░░░░░     23.57%
ChatGPT                  9 hrs 24 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.07%
Warp                     7 hrs 10 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.23%
ChatGPTClassic           1 hr 41 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.88%
Notion                   1 hr 1 min          ░░░░░░░░░░░░░░░░░░░░░░░░░      1.75%
Spotify                  50 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
Zed                      25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.73%
PhpStorm                 24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
Discord                  18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.52%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Other                    14 hrs 48 mins      ██████░░░░░░░░░░░░░░░░░░░     25.27%
Markdown                 14 hrs 17 mins      ██████░░░░░░░░░░░░░░░░░░░      24.4%
PHP                      10 hrs 28 mins      ████░░░░░░░░░░░░░░░░░░░░░     17.86%
Bash                     5 hrs 30 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.39%
YAML                     4 hrs 54 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.36%
INI                      2 hrs 50 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.84%
JSON                     1 hr 44 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.98%
Makefile                 1 hr 21 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.31%
Docker                   1 hr 8 mins         ░░░░░░░░░░░░░░░░░░░░░░░░░      1.96%
HTML                     43 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Nginx configuration file 10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
Git Config               9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
Apache Config            8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.23%
HTTP Request             5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
.env file                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Python                   2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
XML                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
TOML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      58 hrs 36 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                29 hrs 34 mins      █████████████░░░░░░░░░░░░     50.46%
Browsing                 17 hrs 4 mins       ███████░░░░░░░░░░░░░░░░░░     29.13%
Coding                   11 hrs 9 mins       █████░░░░░░░░░░░░░░░░░░░░     19.05%
Writing Docs             31 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.9%
Code Reviewing           16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
