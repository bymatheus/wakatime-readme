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

Safari                   19 hrs 20 mins      ███████████░░░░░░░░░░░░░░     45.04%
ChatGPT                  7 hrs 44 mins       █████░░░░░░░░░░░░░░░░░░░░     18.01%
WebStorm                 5 hrs 43 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.33%
Warp                     5 hrs 24 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.57%
Spotify                  1 hr 58 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.61%
Fleet                    1 hr                █░░░░░░░░░░░░░░░░░░░░░░░░      2.36%
PhpStorm                 49 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.92%
VS Code                  26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.02%
Postman                  18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.71%
Notion                   6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
DataGrip                 4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.16%
Insomnia                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

Other                    18 hrs 54 mins      ███████████░░░░░░░░░░░░░░     44.01%
YAML                     7 hrs 33 mins       ████░░░░░░░░░░░░░░░░░░░░░     17.59%
Markdown                 6 hrs 43 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.64%
Bash                     5 hrs 35 mins       ███░░░░░░░░░░░░░░░░░░░░░░        13%
HTTP Request             1 hr 24 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.28%
JSON                     38 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.49%
Shell Script             36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.43%
Text                     20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.81%
GitIgnore file           19 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.74%
SQL                      13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.53%
textmate                 12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.48%
Docker                   11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
PHP                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.21%
TSConfig                 3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.15%
JavaScript               3 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
TypeScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Blade Template           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
.env file                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Prettier File            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      42 hrs 57 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   23 hrs 11 mins      █████████████░░░░░░░░░░░░        54%
Browsing                 19 hrs 20 mins      ███████████░░░░░░░░░░░░░░     45.04%
Debugging                18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.71%
Writing Docs             6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
```
