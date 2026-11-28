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

Claude Code              64 hrs 24 mins      ████████████████████░░░░░     79.02%
Safari                   8 hrs 35 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.53%
ChatGPT                  4 hrs 15 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.22%
Warp                     3 hrs 30 mins       █░░░░░░░░░░░░░░░░░░░░░░░░       4.3%
Spotify                  42 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.87%
Discord                  1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Notion                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
```text
💬 Linguagem

PHP                      33 hrs 6 mins       ██████████░░░░░░░░░░░░░░░     40.61%
Markdown                 24 hrs 57 mins      ████████░░░░░░░░░░░░░░░░░     30.61%
Other                    10 hrs 23 mins      ███░░░░░░░░░░░░░░░░░░░░░░     12.74%
Python                   4 hrs 35 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      5.64%
JSON                     2 hrs 30 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      3.08%
Text                     1 hr 45 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.15%
Diff                     1 hr 30 mins        ░░░░░░░░░░░░░░░░░░░░░░░░░      1.85%
Bash                     54 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.12%
CSV                      26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.53%
YAML                     17 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.36%
XML                      16 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.34%
TypeScript               15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.31%
HTML                     8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.17%
Makefile                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
JavaScript               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Nginx configuration file 3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Blade Template           2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
Git Config               2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
INI                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Image (svg)              1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
CSS                      1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
NEON                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Git                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SCSS                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Groff                    0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Batchfile                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      81 hrs 30 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                70 hrs 12 mins      ██████████████████████░░░     86.13%
Coding                   5 hrs 41 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.97%
Browsing                 3 hrs 42 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.54%
Code Reviewing           1 hr 54 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.34%
Writing Docs             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
