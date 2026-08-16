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

Claude Code              27 hrs 47 mins      ██████████░░░░░░░░░░░░░░░     39.42%
Safari                   20 hrs 40 mins      ███████░░░░░░░░░░░░░░░░░░     29.32%
Warp                     8 hrs 5 mins        ███░░░░░░░░░░░░░░░░░░░░░░     11.49%
Notion                   5 hrs 8 mins        ██░░░░░░░░░░░░░░░░░░░░░░░       7.3%
ChatGPT                  4 hrs 26 mins       ██░░░░░░░░░░░░░░░░░░░░░░░       6.3%
Spotify                  1 hr 56 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.76%
Codex Vscode             49 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.17%
PhpStorm                 33 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.79%
VS Code                  26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.63%
Discord                  21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.51%
Zed                      11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.27%
Edge                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
ChatGPTClassic           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

PHP                      29 hrs 54 mins      ███████████░░░░░░░░░░░░░░     42.43%
Other                    17 hrs 18 mins      ██████░░░░░░░░░░░░░░░░░░░     24.55%
Markdown                 14 hrs 15 mins      █████░░░░░░░░░░░░░░░░░░░░     20.23%
Bash                     3 hrs 40 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.22%
YAML                     1 hr 12 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.72%
.env file                53 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.27%
JSON                     50 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.19%
SQL                      45 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Python                   30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.73%
NEON                     24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.59%
Blade Template           13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.33%
JavaScript               5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Docker                   5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Terraform                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Text                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Makefile                 3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Image (svg)              2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Java Properties          1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Org                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      70 hrs 30 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                49 hrs 22 mins      ██████████████████░░░░░░░     70.04%
Browsing                 10 hrs 16 mins      ████░░░░░░░░░░░░░░░░░░░░░     14.57%
Coding                   7 hrs 26 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.54%
Writing Docs             3 hrs 18 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.69%
Code Reviewing           7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
```
