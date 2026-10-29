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

Claude Code              38 hrs 14 mins      █████████████████░░░░░░░░     67.06%
Safari                   9 hrs 24 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.49%
ChatGPT                  4 hrs 46 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.37%
Warp                     3 hrs 49 mins       ██░░░░░░░░░░░░░░░░░░░░░░░       6.7%
Notion                   22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.67%
Spotify                  15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.47%
Codex Vscode             7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
Discord                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
PhpStorm                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Zed                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

Other                    17 hrs 33 mins      ████████░░░░░░░░░░░░░░░░░     30.78%
PHP                      14 hrs 10 mins      ██████░░░░░░░░░░░░░░░░░░░     24.85%
Markdown                 14 hrs 4 mins       ██████░░░░░░░░░░░░░░░░░░░     24.68%
Python                   1 hr 39 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.92%
TypeScript               1 hr 38 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.87%
HTML                     1 hr 22 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.42%
Blade Template           1 hr 9 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      2.04%
JSON                     56 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.64%
Bash                     52 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.54%
YAML                     51 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.5%
Text                     47 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.37%
Docker                   40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.2%
Diff                     28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.82%
CSS                      27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
JavaScript               11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.33%
XML                      3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
Java Properties          2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
SQL                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Makefile                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Git                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💻 Sistema Operacional

Mac                      57 hrs 2 mins       █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                43 hrs 3 mins       ███████████████████░░░░░░      75.5%
Browsing                 7 hrs 31 mins       ███░░░░░░░░░░░░░░░░░░░░░░      13.2%
Coding                   6 hrs 10 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.83%
Writing Docs             15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.45%
Code Reviewing           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
