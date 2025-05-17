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

Safari                   28 hrs 40 mins      █████████████████░░░░░░░░     69.05%
ChatGPT                  4 hrs 53 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.78%
Warp                     3 hrs 8 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      7.57%
Spotify                  1 hr 30 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.63%
PhpStorm                 1 hr 19 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.18%
WebStorm                 1 hr 1 min          █░░░░░░░░░░░░░░░░░░░░░░░░      2.45%
Notion                   23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
Postman                  20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
Slack                    9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.36%
DataGrip                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.19%
```
```text
💬 Linguagem

PHP                      11 hrs 14 mins      ███████░░░░░░░░░░░░░░░░░░     27.07%
Other                    11 hrs 1 min        ███████░░░░░░░░░░░░░░░░░░     26.53%
Markdown                 9 hrs 45 mins       ██████░░░░░░░░░░░░░░░░░░░     23.51%
Blade Template           2 hrs 42 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.52%
Text                     1 hr 48 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.36%
HTTP Request             1 hr 32 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.72%
YAML                     1 hr 14 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.99%
JSON                     51 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.06%
Docker                   35 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.44%
textmate                 16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.64%
GitIgnore file           9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.38%
TypeScript               9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
SQL                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
Bash                     3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
Shell Script             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      41 hrs 31 mins      █████████████████████████       100%
```
```text
📦 Categoria

Browsing                 28 hrs 40 mins      █████████████████░░░░░░░░     69.05%
Coding                   11 hrs 57 mins      ███████░░░░░░░░░░░░░░░░░░      28.8%
Writing Docs             23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.96%
Debugging                20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.83%
Communicating            9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.36%
```
