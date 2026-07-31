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

Safari                   27 hrs 6 mins       ██████████░░░░░░░░░░░░░░░     40.83%
Claude Code              15 hrs 58 mins      ██████░░░░░░░░░░░░░░░░░░░     24.06%
ChatGPTClassic           14 hrs 27 mins      █████░░░░░░░░░░░░░░░░░░░░     21.79%
Warp                     4 hrs 44 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.14%
PhpStorm                 1 hr 27 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.19%
Spotify                  1 hr 5 mins         ░░░░░░░░░░░░░░░░░░░░░░░░░      1.64%
Notion                   47 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.19%
Discord                  28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
Miro                     16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Zed                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Postman                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💬 Linguagem

Other                    18 hrs 52 mins      ███████░░░░░░░░░░░░░░░░░░     28.45%
Markdown                 18 hrs 16 mins      ███████░░░░░░░░░░░░░░░░░░     27.54%
PHP                      16 hrs 39 mins      ██████░░░░░░░░░░░░░░░░░░░     25.12%
Bash                     5 hrs 47 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.74%
SQL                      2 hrs 56 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.42%
JSON                     1 hr 3 mins         ░░░░░░░░░░░░░░░░░░░░░░░░░      1.59%
.env file                43 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.09%
JavaScript               38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
Blade Template           32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
Text                     12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.32%
YAML                     9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
Git Config               6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Python                   5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
XML                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Makefile                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
SCSS                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Diff                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Docker                   1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Java Properties          0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
htaccess                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
NEON                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      66 hrs 20 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                27 hrs 32 mins      ██████████░░░░░░░░░░░░░░░     41.52%
Browsing                 20 hrs 58 mins      ████████░░░░░░░░░░░░░░░░░     31.63%
Coding                   16 hrs 42 mins      ██████░░░░░░░░░░░░░░░░░░░     25.18%
Writing Docs             39 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.98%
Planning                 16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Code Reviewing           11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.29%
```
