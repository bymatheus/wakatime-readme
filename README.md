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

Claude Code              37 hrs 53 mins      ████████████████████░░░░░     78.28%
Safari                   7 hrs 14 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.96%
Warp                     1 hr 52 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.88%
ChatGPT                  1 hr 2 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      2.15%
Zed                      8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.29%
Discord                  7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
Spotify                  5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
DataGrip                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💬 Linguagem

PHP                      22 hrs              ███████████░░░░░░░░░░░░░░     45.46%
Markdown                 15 hrs 32 mins      ████████░░░░░░░░░░░░░░░░░     32.12%
Other                    5 hrs 50 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.08%
Bash                     1 hr 52 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.86%
Python                   1 hr 42 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.53%
Text                     26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.91%
JSON                     23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
HTML                     23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
SCSS                     5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
Git                      3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Blade Template           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Makefile                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Diff                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
YAML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      48 hrs 24 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                40 hrs 33 mins      █████████████████████░░░░     83.78%
Browsing                 4 hrs 52 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.06%
Coding                   2 hrs 23 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.95%
Code Reviewing           35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.21%
```
