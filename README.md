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

Claude Code              34 hrs 9 mins       ████████████░░░░░░░░░░░░░     46.96%
Safari                   20 hrs 37 mins      ███████░░░░░░░░░░░░░░░░░░     28.37%
Warp                     8 hrs 19 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.46%
Notion                   3 hrs 52 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.33%
ChatGPTClassic           2 hrs 16 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      3.12%
Spotify                  1 hr 11 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.64%
Codex Vscode             42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.97%
VS Code                  41 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
PhpStorm                 32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.74%
Discord                  12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.29%
Zed                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Edge                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

PHP                      31 hrs 56 mins      ███████████░░░░░░░░░░░░░░     43.92%
Markdown                 16 hrs 25 mins      ██████░░░░░░░░░░░░░░░░░░░     22.58%
Other                    14 hrs 17 mins      █████░░░░░░░░░░░░░░░░░░░░     19.66%
Bash                     3 hrs 40 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.04%
JSON                     1 hr 49 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       2.5%
YAML                     1 hr 14 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.71%
.env file                53 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Python                   42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.97%
NEON                     24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.57%
XML                      22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.52%
SQL                      14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.33%
Makefile                 10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
HTML                     7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Docker                   4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Terraform                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
Text                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Image (svg)              2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
JavaScript               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Java Properties          1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      72 hrs 43 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                54 hrs 20 mins      ███████████████████░░░░░░     74.73%
Browsing                 10 hrs 26 mins      ████░░░░░░░░░░░░░░░░░░░░░     14.36%
Coding                   5 hrs 11 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.15%
Writing Docs             2 hrs 33 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      3.52%
Code Reviewing           10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
```
