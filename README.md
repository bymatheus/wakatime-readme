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

Safari                   11 hrs 25 mins      ███████████░░░░░░░░░░░░░░     42.38%
WebStorm                 4 hrs 14 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.75%
ChatGPT                  3 hrs 55 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.53%
PhpStorm                 2 hrs 59 mins       ███░░░░░░░░░░░░░░░░░░░░░░      11.1%
Warp                     1 hr 33 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.75%
Spotify                  1 hr 21 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.01%
Postman                  1 hr 1 min          █░░░░░░░░░░░░░░░░░░░░░░░░      3.81%
Notion                   18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.16%
DataGrip                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.27%
Slack                    3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
```
```text
💬 Linguagem

Other                    7 hrs 52 mins       ███████░░░░░░░░░░░░░░░░░░     29.22%
YAML                     7 hrs 39 mins       ███████░░░░░░░░░░░░░░░░░░     28.42%
PHP                      4 hrs 28 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.57%
HTTP Request             3 hrs 1 min         ███░░░░░░░░░░░░░░░░░░░░░░     11.19%
Terraform                2 hrs 41 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.99%
Docker                   27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.68%
textmate                 12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.79%
Markdown                 11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.7%
Bash                     9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.57%
JSON                     6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.37%
HCL                      4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
SQL                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
.env file                1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
DockerIgnore file        0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Shell Script             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
XML                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
GitIgnore file           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      26 hrs 58 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   13 hrs 58 mins      █████████████░░░░░░░░░░░░     51.82%
Browsing                 11 hrs 25 mins      ███████████░░░░░░░░░░░░░░     42.38%
Debugging                1 hr 1 min          █░░░░░░░░░░░░░░░░░░░░░░░░      3.81%
Writing Docs             28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.75%
Communicating            3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
```
