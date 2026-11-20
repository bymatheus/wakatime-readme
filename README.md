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

Claude Code              39 hrs 36 mins      ███████████████████░░░░░░     75.43%
Safari                   6 hrs 43 mins       ███░░░░░░░░░░░░░░░░░░░░░░      12.8%
Warp                     3 hrs 6 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      5.92%
ChatGPT                  2 hrs 32 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.85%
Spotify                  20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.65%
Zed                      8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.26%
Notion                   1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
Discord                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
DataGrip                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

PHP                      19 hrs 48 mins      █████████░░░░░░░░░░░░░░░░     37.73%
Markdown                 19 hrs 34 mins      █████████░░░░░░░░░░░░░░░░     37.27%
Other                    6 hrs 17 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.97%
Python                   2 hrs 14 mins       █░░░░░░░░░░░░░░░░░░░░░░░░      4.25%
Bash                     1 hr 34 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.01%
Diff                     1 hr 26 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.74%
Text                     43 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.39%
JSON                     27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.89%
Git                      12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.4%
XML                      2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Blade Template           2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
YAML                     2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
HTML                     1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
JavaScript               1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
SQL                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      52 hrs 30 mins      █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                42 hrs 38 mins      ████████████████████░░░░░     81.21%
Browsing                 5 hrs 24 mins       ███░░░░░░░░░░░░░░░░░░░░░░     10.31%
Coding                   4 hrs 24 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.39%
Writing Docs             1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.06%
Code Reviewing           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
```
