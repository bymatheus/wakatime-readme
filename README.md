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

Safari                   11 hrs              ██████████░░░░░░░░░░░░░░░     40.38%
PhpStorm                 6 hrs 51 mins       ██████░░░░░░░░░░░░░░░░░░░     25.18%
ChatGPT                  4 hrs 16 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.67%
Unknown Editor           1 hr 44 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      6.37%
Spotify                  1 hr 28 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.41%
Warp                     1 hr 19 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.83%
Postman                  24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.5%
Slack                    5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
Notion                   4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
DataGrip                 1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
```
```text
💬 Linguagem

Other                    16 hrs 23 mins      ███████████████░░░░░░░░░░     60.17%
Blade Template           6 hrs 23 mins       ██████░░░░░░░░░░░░░░░░░░░     23.44%
HTTP Request             1 hr 21 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.97%
PHP                      1 hr                █░░░░░░░░░░░░░░░░░░░░░░░░      3.69%
Markdown                 54 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      3.34%
SCSS                     37 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.27%
SQL                      19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.21%
JavaScript               8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.49%
Text                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
JSON                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
.env file                1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
CSS                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Log                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
TypeScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Bash                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
yarn.lock                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
YAML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
htaccess                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      27 hrs 14 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   13 hrs 41 mins      █████████████░░░░░░░░░░░░     50.25%
Browsing                 10 hrs 59 mins      ██████████░░░░░░░░░░░░░░░     40.31%
AI Coding                2 hrs               ██░░░░░░░░░░░░░░░░░░░░░░░      7.36%
Debugging                24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.49%
Communicating            5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
Writing Docs             4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.28%
```
