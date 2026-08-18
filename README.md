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

Claude Code              27 hrs 11 mins      █████████░░░░░░░░░░░░░░░░     37.65%
Safari                   20 hrs 43 mins      ███████░░░░░░░░░░░░░░░░░░     28.69%
Warp                     8 hrs 26 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.69%
ChatGPT                  7 hrs 6 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      9.85%
Notion                   5 hrs 31 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.66%
Spotify                  1 hr 44 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.41%
Codex Vscode             29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.68%
Zed                      24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.56%
PhpStorm                 17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.4%
Discord                  16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
Edge                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Postman                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
```text
💬 Linguagem

PHP                      27 hrs 48 mins      ██████████░░░░░░░░░░░░░░░     38.51%
Other                    21 hrs 9 mins       ███████░░░░░░░░░░░░░░░░░░     29.29%
Markdown                 18 hrs 56 mins      ███████░░░░░░░░░░░░░░░░░░     26.23%
JSON                     1 hr 1 min          ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
SQL                      45 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.05%
.env file                32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.75%
Bash                     32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.74%
Python                   30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
Blade Template           13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.32%
YAML                     12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
JavaScript               5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Terraform                4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
NEON                     4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
Docker                   3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Text                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Makefile                 2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Image (svg)              2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
XML                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
HTTP Request             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Git Config               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Org                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      72 hrs 13 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                48 hrs 46 mins      █████████████████░░░░░░░░     67.55%
Browsing                 10 hrs 2 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.91%
Coding                   9 hrs 53 mins       ███░░░░░░░░░░░░░░░░░░░░░░      13.7%
Writing Docs             3 hrs 21 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.65%
Code Reviewing           7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Debugging                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
