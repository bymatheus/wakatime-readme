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

Claude Code              50 hrs 33 mins      ████████████████░░░░░░░░░     65.77%
Safari                   11 hrs 51 mins      ████░░░░░░░░░░░░░░░░░░░░░     15.43%
Warp                     6 hrs 33 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.53%
ChatGPT                  6 hrs 3 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      7.87%
Spotify                  54 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.18%
PhpStorm                 22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.49%
Notion                   21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Zed                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Discord                  4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Postman                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
```
```text
💬 Linguagem

Other                    34 hrs 52 mins      ███████████░░░░░░░░░░░░░░     45.36%
PHP                      27 hrs 32 mins      █████████░░░░░░░░░░░░░░░░     35.83%
Markdown                 9 hrs 26 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.28%
Bash                     1 hr 53 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.46%
JSON                     51 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.11%
HTTP Request             42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.92%
.env file                21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.46%
Python                   17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
Text                     16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
YAML                     13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.3%
SQL                      12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
Makefile                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
NEON                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
XML                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      76 hrs 52 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                56 hrs 40 mins      ██████████████████░░░░░░░     73.73%
Coding                   11 hrs 5 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.42%
Browsing                 8 hrs 45 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.39%
Writing Docs             19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.43%
Debugging                1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Code Reviewing           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
