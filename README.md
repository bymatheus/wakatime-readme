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

ChatGPT                  25 hrs 17 mins      █████████████░░░░░░░░░░░░     53.47%
Claude Code              7 hrs 49 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.55%
PhpStorm                 5 hrs 46 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.23%
Unknown Editor           3 hrs 39 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.72%
Spotify                  2 hrs 7 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.48%
Notion                   53 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.9%
Safari                   40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.42%
Postman                  30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Slack                    28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
Miro                     4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
```
```text
💬 Linguagem

Other                    21 hrs 8 mins       ███████████░░░░░░░░░░░░░░      44.7%
YAML                     7 hrs 1 min         ████░░░░░░░░░░░░░░░░░░░░░     14.84%
PHP                      5 hrs 22 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.38%
Markdown                 3 hrs 11 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.74%
Makefile                 2 hrs 42 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.73%
.env file                1 hr 57 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.16%
Docker                   1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.47%
Bash                     1 hr 5 mins         █░░░░░░░░░░░░░░░░░░░░░░░░       2.3%
SQL                      1 hr 4 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      2.29%
JSON                     47 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.68%
HTTP Request             30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Blade Template           27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
NEON                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.63%
Apache Config            16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.58%
JavaScript               7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
XML                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Nginx configuration file 1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
Git Config               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
HTML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      47 hrs 17 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                23 hrs 10 mins      ████████████░░░░░░░░░░░░░     49.01%
Coding                   20 hrs 31 mins      ███████████░░░░░░░░░░░░░░     43.42%
Writing Docs             1 hr 55 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.08%
Browsing                 40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.42%
Debugging                30 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Communicating            28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.99%
Planning                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Writing Tests            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
