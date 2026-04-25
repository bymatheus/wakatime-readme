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

Safari                   21 hrs 33 mins      ███████████████░░░░░░░░░░     61.48%
ChatGPT                  3 hrs 53 mins       ███░░░░░░░░░░░░░░░░░░░░░░      11.1%
DataGrip                 3 hrs 12 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.16%
PhpStorm                 3 hrs 11 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.09%
Warp                     1 hr 24 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.04%
Spotify                  29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.38%
Unknown Editor           26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.28%
Postman                  25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Notion                   22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.07%
Slack                    3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
```
```text
💬 Linguagem

Other                    11 hrs 47 mins      ████████░░░░░░░░░░░░░░░░░     33.64%
PHP                      10 hrs 2 mins       ███████░░░░░░░░░░░░░░░░░░     28.62%
Blade Template           8 hrs 22 mins       ██████░░░░░░░░░░░░░░░░░░░     23.86%
HTTP Request             1 hr 54 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.46%
Bash                     43 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.07%
Docker                   35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.68%
JSON                     27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.32%
Markdown                 21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.03%
.env file                12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.61%
textmate                 10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.51%
YAML                     9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.47%
Makefile                 8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
SQL                      3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
JavaScript               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Git Config               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker File              0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Log                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Image (svg)              0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      35 hrs 3 mins       █████████████████████████       100%
```
```text
📦 Categoria

Browsing                 21 hrs 29 mins      ███████████████░░░░░░░░░░     61.28%
Coding                   11 hrs 47 mins      ████████░░░░░░░░░░░░░░░░░     33.64%
Writing Docs             39 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.9%
AI Coding                35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.68%
Debugging                25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.23%
Communicating            3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.18%
Code Reviewing           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
```
