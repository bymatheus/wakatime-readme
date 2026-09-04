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

Safari                   21 hrs 42 mins      ██████████░░░░░░░░░░░░░░░     40.68%
Claude Code              18 hrs 11 mins      █████████░░░░░░░░░░░░░░░░     34.08%
ChatGPT                  6 hrs 30 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.19%
Warp                     3 hrs 19 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.24%
Notion                   1 hr 31 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.85%
Codex Vscode             44 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.4%
Spotify                  25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.78%
Zed                      20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.63%
Postman                  17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.54%
Discord                  11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
PhpStorm                 7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
```
```text
💬 Linguagem

Other                    17 hrs 54 mins      ████████░░░░░░░░░░░░░░░░░     33.46%
PHP                      11 hrs 31 mins      █████░░░░░░░░░░░░░░░░░░░░     21.52%
Markdown                 9 hrs 42 mins       █████░░░░░░░░░░░░░░░░░░░░     18.15%
HTTP Request             4 hrs 15 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.97%
Python                   4 hrs               ██░░░░░░░░░░░░░░░░░░░░░░░      7.48%
Bash                     2 hrs 36 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.89%
.env file                1 hr 53 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.53%
HTML                     35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.1%
XML                      18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.58%
JSON                     9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
JavaScript               9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
TypeScript               7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
SQL                      4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
YAML                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
NEON                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Docker                   2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Makefile                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Git Config               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
TSConfig                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      53 hrs 22 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                31 hrs 22 mins      ███████████████░░░░░░░░░░     58.77%
Browsing                 13 hrs 6 mins       ██████░░░░░░░░░░░░░░░░░░░     24.55%
Coding                   6 hrs 13 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.66%
Code Reviewing           1 hr 20 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.52%
Writing Docs             1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.21%
Debugging                9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.29%
```
