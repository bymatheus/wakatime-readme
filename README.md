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

Claude Code              30 hrs 33 mins      ██████████░░░░░░░░░░░░░░░     41.61%
Safari                   22 hrs              ███████░░░░░░░░░░░░░░░░░░     29.98%
Warp                     9 hrs 5 mins        ███░░░░░░░░░░░░░░░░░░░░░░     12.39%
Notion                   4 hrs 59 mins       ██░░░░░░░░░░░░░░░░░░░░░░░       6.8%
ChatGPTClassic           1 hr 34 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.15%
ChatGPT                  1 hr 28 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.01%
Spotify                  1 hr 15 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.71%
Codex Vscode             42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
VS Code                  41 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.95%
PhpStorm                 35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.8%
Discord                  20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Zed                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Edge                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

PHP                      31 hrs 23 mins      ███████████░░░░░░░░░░░░░░     42.75%
Other                    15 hrs 46 mins      █████░░░░░░░░░░░░░░░░░░░░     21.49%
Markdown                 15 hrs 38 mins      █████░░░░░░░░░░░░░░░░░░░░     21.31%
Bash                     3 hrs 40 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.01%
JSON                     1 hr 40 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.28%
YAML                     1 hr 16 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.73%
.env file                53 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.22%
SQL                      47 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.08%
Python                   30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
NEON                     24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.56%
XML                      22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.52%
Blade Template           16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.38%
Makefile                 11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.27%
HTML                     7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
JavaScript               5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Docker                   4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Terraform                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Text                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Image (svg)              2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Java Properties          1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Org                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      73 hrs 25 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                52 hrs 4 mins       ██████████████████░░░░░░░     70.92%
Browsing                 11 hrs 43 mins      ████░░░░░░░░░░░░░░░░░░░░░     15.98%
Coding                   6 hrs 12 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.45%
Writing Docs             3 hrs 12 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.37%
Code Reviewing           12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
```
