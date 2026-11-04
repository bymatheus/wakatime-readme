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

Claude Code              27 hrs 5 mins       ███████████████░░░░░░░░░░     61.06%
Safari                   12 hrs 14 mins      ███████░░░░░░░░░░░░░░░░░░     27.59%
ChatGPT                  2 hrs 26 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.52%
Warp                     1 hr 38 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.71%
Spotify                  38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.44%
Discord                  11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.42%
Notion                   3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Codex Vscode             3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
```
```text
💬 Linguagem

Markdown                 19 hrs 49 mins      ███████████░░░░░░░░░░░░░░     44.68%
PHP                      12 hrs              ███████░░░░░░░░░░░░░░░░░░     27.07%
Other                    6 hrs 51 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.47%
Python                   1 hr 58 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.45%
HTML                     57 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.18%
Bash                     57 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.15%
Text                     36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.39%
YAML                     20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.76%
JavaScript               12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.48%
Blade Template           8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
JSON                     6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
Diff                     5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.2%
SQL                      3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.14%
TypeScript               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Nginx configuration file 3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
XML                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Java Properties          2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
Docker                   1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Makefile                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Git                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      44 hrs 21 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                31 hrs 27 mins      ██████████████████░░░░░░░     70.92%
Browsing                 8 hrs 39 mins       █████░░░░░░░░░░░░░░░░░░░░      19.5%
Coding                   3 hrs 52 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.72%
Code Reviewing           20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.79%
Writing Docs             1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
```
