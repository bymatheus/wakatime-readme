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

Safari                   21 hrs 6 mins       ███████████████░░░░░░░░░░     60.48%
PhpStorm                 4 hrs 15 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.18%
ChatGPT                  3 hrs 31 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.11%
Warp                     2 hrs 10 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.23%
Spotify                  1 hr 27 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.16%
Postman                  54 mins             █░░░░░░░░░░░░░░░░░░░░░░░░       2.6%
Notion                   44 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.13%
Unknown Editor           43 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.08%
Slack                    0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
DataGrip                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
```text
💬 Linguagem

Other                    15 hrs 51 mins      ███████████░░░░░░░░░░░░░░     45.44%
PHP                      7 hrs 4 mins        █████░░░░░░░░░░░░░░░░░░░░     20.28%
Blade Template           5 hrs 33 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.91%
HTTP Request             2 hrs 23 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.84%
Docker                   1 hr 25 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.09%
Makefile                 38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.83%
YAML                     32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.53%
JSON                     28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.36%
Markdown                 26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.24%
.env file                18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.89%
Bash                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.19%
SQL                      3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
textmate                 2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Git Config               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker File              0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Log                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      34 hrs 54 mins      █████████████████████████       100%
```
```text
📦 Categoria

Browsing                 21 hrs 1 min        ███████████████░░░░░░░░░░     60.25%
Coding                   10 hrs 51 mins      ████████░░░░░░░░░░░░░░░░░     31.12%
Writing Docs             1 hr 4 mins         █░░░░░░░░░░░░░░░░░░░░░░░░       3.1%
AI Coding                59 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.86%
Debugging                54 mins             █░░░░░░░░░░░░░░░░░░░░░░░░       2.6%
Code Reviewing           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Communicating            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
