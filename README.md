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

Claude Code              23 hrs 25 mins      █████████░░░░░░░░░░░░░░░░     34.35%
Safari                   21 hrs 42 mins      ████████░░░░░░░░░░░░░░░░░     31.84%
ChatGPTClassic           12 hrs 49 mins      █████░░░░░░░░░░░░░░░░░░░░     18.81%
Warp                     6 hrs 15 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.19%
Notion                   2 hrs 18 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      3.38%
PhpStorm                 42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.05%
Spotify                  38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.95%
Discord                  17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
```
```text
💬 Linguagem

PHP                      19 hrs 48 mins      ███████░░░░░░░░░░░░░░░░░░     29.05%
Other                    17 hrs 52 mins      ███████░░░░░░░░░░░░░░░░░░     26.21%
Markdown                 13 hrs 51 mins      █████░░░░░░░░░░░░░░░░░░░░     20.33%
JSON                     4 hrs 12 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.17%
SQL                      3 hrs 31 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.16%
Bash                     2 hrs 45 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.05%
Text                     1 hr 57 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.87%
YAML                     1 hr 41 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.48%
Java Properties          57 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.41%
.env file                36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.89%
XML                      18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.45%
Makefile                 14 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
Blade Template           8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.2%
Git Config               6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
NEON                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Diff                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
JavaScript               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Docker                   1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Git                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Nginx configuration file 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      68 hrs 10 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                39 hrs 37 mins      ███████████████░░░░░░░░░░     58.13%
Browsing                 14 hrs 24 mins      █████░░░░░░░░░░░░░░░░░░░░     21.13%
Coding                   12 hrs 22 mins      █████░░░░░░░░░░░░░░░░░░░░     18.14%
Writing Docs             1 hr 40 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.46%
Code Reviewing           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
```
