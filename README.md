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

Safari                   12 hrs 9 mins       █████████░░░░░░░░░░░░░░░░     37.73%
ChatGPT                  7 hrs 52 mins       ██████░░░░░░░░░░░░░░░░░░░     24.46%
Warp                     5 hrs 13 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.24%
Postman                  2 hrs 54 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.05%
PhpStorm                 2 hrs 1 min         ██░░░░░░░░░░░░░░░░░░░░░░░      6.27%
Notion                   1 hr 6 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.42%
Spotify                  24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.27%
Slack                    18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.98%
WebStorm                 6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.32%
DataGrip                 5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.27%
Insomnia                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

Other                    15 hrs 18 mins      ████████████░░░░░░░░░░░░░     47.53%
HTTP Request             10 hrs 58 mins      █████████░░░░░░░░░░░░░░░░     34.09%
YAML                     1 hr 44 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.41%
SQL                      58 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      3.01%
.env file                48 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.49%
Bash                     37 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.96%
PHP                      36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.91%
Markdown                 31 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.64%
JSON                     13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
XML                      11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.61%
Docker                   6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.32%
Java Properties          2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
SonarQube for IDE Properties1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
GitIgnore file           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Blade Template           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      32 hrs 12 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   15 hrs 26 mins      ████████████░░░░░░░░░░░░░     47.94%
Browsing                 12 hrs 9 mins       █████████░░░░░░░░░░░░░░░░     37.73%
Debugging                2 hrs 54 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.05%
Writing Docs             1 hr 23 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       4.3%
Communicating            18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.98%
```
