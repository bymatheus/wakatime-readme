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

Safari                   23 hrs              ███████████░░░░░░░░░░░░░░     45.07%
Claude Code              11 hrs 50 mins      ██████░░░░░░░░░░░░░░░░░░░     23.21%
ChatGPT                  7 hrs 43 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.13%
Warp                     4 hrs 24 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.63%
Postman                  1 hr 15 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.46%
PhpStorm                 57 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.87%
Spotify                  52 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.72%
Notion                   28 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.94%
Codex Vscode             23 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.76%
Zed                      6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░       0.2%
Discord                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💬 Linguagem

Other                    18 hrs 43 mins      █████████░░░░░░░░░░░░░░░░      36.7%
PHP                      9 hrs 48 mins       █████░░░░░░░░░░░░░░░░░░░░     19.23%
Markdown                 6 hrs 57 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.62%
HTML                     4 hrs 55 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      9.64%
Blade Template           4 hrs 21 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      8.55%
HTTP Request             3 hrs 51 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.55%
SQL                      1 hr 13 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      2.41%
JavaScript               32 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.05%
Bash                     25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.85%
JSON                     10 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.35%
.env file                1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.05%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💻 Sistema Operacional

Mac                      51 hrs 2 mins       █████████████████████████       100%
```
```text
📦 Categoria

AI Coding                22 hrs 41 mins      ███████████░░░░░░░░░░░░░░     44.46%
Browsing                 17 hrs 29 mins      █████████░░░░░░░░░░░░░░░░     34.28%
Coding                   9 hrs 32 mins       █████░░░░░░░░░░░░░░░░░░░░      18.7%
Debugging                52 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.71%
Writing Docs             24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.8%
Code Reviewing           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
```
