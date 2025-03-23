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

Safari                   19 hrs 27 mins      ████████████░░░░░░░░░░░░░     47.94%
ChatGPT                  7 hrs 6 mins        ████░░░░░░░░░░░░░░░░░░░░░     17.51%
WebStorm                 4 hrs 58 mins       ███░░░░░░░░░░░░░░░░░░░░░░     12.28%
Warp                     4 hrs 44 mins       ███░░░░░░░░░░░░░░░░░░░░░░     11.67%
Spotify                  1 hr 52 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       4.6%
Fleet                    1 hr                █░░░░░░░░░░░░░░░░░░░░░░░░       2.5%
PhpStorm                 49 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.04%
VS Code                  26 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.08%
Notion                   6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
DataGrip                 2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.11%
Insomnia                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
```
```text
💬 Linguagem

Other                    17 hrs 11 mins      ███████████░░░░░░░░░░░░░░     42.38%
Bash                     8 hrs 36 mins       █████░░░░░░░░░░░░░░░░░░░░     21.21%
Markdown                 6 hrs 41 mins       ████░░░░░░░░░░░░░░░░░░░░░     16.48%
YAML                     5 hrs 50 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.39%
Shell Script             36 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.51%
JSON                     24 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.01%
Text                     20 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.86%
GitIgnore file           18 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.77%
SQL                      12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░       0.5%
textmate                 11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.47%
PHP                      5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.22%
Docker                   2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
TypeScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Blade Template           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
.env file                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Prettier File            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      40 hrs 34 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   21 hrs 1 min        █████████████░░░░░░░░░░░░      51.8%
Browsing                 19 hrs 27 mins      ████████████░░░░░░░░░░░░░     47.94%
Writing Docs             6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.25%
```
