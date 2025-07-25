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

Safari                   13 hrs 3 mins       █████████░░░░░░░░░░░░░░░░     34.68%
ChatGPT                  8 hrs 9 mins        █████░░░░░░░░░░░░░░░░░░░░     21.66%
PhpStorm                 7 hrs 5 mins        █████░░░░░░░░░░░░░░░░░░░░     18.84%
Warp                     4 hrs 20 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.55%
Spotify                  2 hrs 17 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.08%
WebStorm                 2 hrs 5 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.56%
DataGrip                 27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.21%
Postman                  3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Slack                    3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Notion                   1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
VS Code                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
```
```text
💬 Linguagem

Other                    16 hrs 15 mins      ███████████░░░░░░░░░░░░░░     43.19%
PHP                      10 hrs 55 mins      ███████░░░░░░░░░░░░░░░░░░        29%
Markdown                 3 hrs 40 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.74%
Docker                   2 hrs 30 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.67%
YAML                     2 hrs 19 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.16%
HTTP Request             56 mins             █░░░░░░░░░░░░░░░░░░░░░░░░       2.5%
JSON                     13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.59%
textmate                 12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.57%
Bash                     9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.41%
Text                     8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.39%
TypeScript               8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
Docker File              2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Git Config               2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
GitIgnore file           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
```text
💻 Sistema Operacional

Mac                      37 hrs 38 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   23 hrs 5 mins       ███████████████░░░░░░░░░░     61.32%
Browsing                 13 hrs 3 mins       █████████░░░░░░░░░░░░░░░░     34.68%
Writing Tests            1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.24%
Writing Docs             10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.49%
Debugging                3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
Communicating            3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
```
