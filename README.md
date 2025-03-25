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

Safari                   19 hrs 50 mins      ████████████░░░░░░░░░░░░░     46.21%
ChatGPT                  6 hrs 59 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.28%
WebStorm                 5 hrs 49 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.58%
Warp                     5 hrs 27 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.72%
Spotify                  2 hrs 40 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.24%
PhpStorm                 57 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.23%
VS Code                  27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.09%
Postman                  18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.72%
Fleet                    13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.53%
Notion                   6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
DataGrip                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
Insomnia                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

Other                    18 hrs 7 mins       ███████████░░░░░░░░░░░░░░     42.24%
YAML                     9 hrs 14 mins       █████░░░░░░░░░░░░░░░░░░░░     21.55%
Markdown                 6 hrs 56 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.18%
Bash                     2 hrs 9 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.01%
HTTP Request             2 hrs 5 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.86%
PHP                      1 hr 35 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.69%
JSON                     38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       1.5%
Shell Script             36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.44%
Text                     20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
GitIgnore file           19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.74%
SQL                      13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.53%
textmate                 12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.48%
Docker                   11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
Blade Template           5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
TSConfig                 3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
JavaScript               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
TypeScript               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
.env file                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Prettier File            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      42 hrs 55 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   22 hrs 40 mins      █████████████░░░░░░░░░░░░     52.83%
Browsing                 19 hrs 50 mins      ████████████░░░░░░░░░░░░░     46.21%
Debugging                18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.72%
Writing Docs             6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
```
