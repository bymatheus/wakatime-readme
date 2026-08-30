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

Safari                   25 hrs 41 mins      ████████████░░░░░░░░░░░░░     48.81%
Claude Code              12 hrs 31 mins      ██████░░░░░░░░░░░░░░░░░░░     23.77%
ChatGPT                  5 hrs 46 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.97%
Warp                     5 hrs 1 min         ██░░░░░░░░░░░░░░░░░░░░░░░      9.53%
Spotify                  1 hr 1 min          ░░░░░░░░░░░░░░░░░░░░░░░░░      1.93%
PhpStorm                 52 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.67%
Notion                   46 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.47%
Discord                  20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.64%
Codex Vscode             18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.58%
Postman                  15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.49%
Zed                      4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
```
```text
💬 Linguagem

PHP                      15 hrs 49 mins      ████████░░░░░░░░░░░░░░░░░     30.05%
Other                    12 hrs 39 mins      ██████░░░░░░░░░░░░░░░░░░░     24.04%
Markdown                 10 hrs 2 mins       █████░░░░░░░░░░░░░░░░░░░░     19.06%
SQL                      5 hrs 46 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.98%
HTML                     4 hrs 15 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.08%
Blade Template           1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.22%
.env file                40 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.28%
JavaScript               32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.02%
HTTP Request             24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.78%
XML                      22 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.71%
YAML                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.54%
JSON                     13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
Bash                     13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.43%
NEON                     10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.34%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💻 Sistema Operacional

Mac                      52 hrs 39 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                24 hrs 49 mins      ████████████░░░░░░░░░░░░░     47.13%
Browsing                 18 hrs 3 mins       █████████░░░░░░░░░░░░░░░░     34.31%
Coding                   8 hrs 32 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.22%
Writing Docs             37 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.18%
Code Reviewing           28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.9%
Debugging                7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
```
