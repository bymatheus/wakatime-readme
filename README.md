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

Safari                   26 hrs 24 mins      ███████████████████░░░░░░     77.87%
ChatGPT                  2 hrs 23 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      7.07%
PhpStorm                 2 hrs 10 mins       ██░░░░░░░░░░░░░░░░░░░░░░░      6.41%
Warp                     1 hr 24 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.15%
Spotify                  1 hr 17 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.79%
DataGrip                 13 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.68%
VS Code                  0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
```
```text
💬 Linguagem

Bash                     6 hrs 56 mins       █████░░░░░░░░░░░░░░░░░░░░     20.48%
Other                    6 hrs 53 mins       █████░░░░░░░░░░░░░░░░░░░░     20.33%
YAML                     5 hrs 46 mins       ████░░░░░░░░░░░░░░░░░░░░░     17.04%
PHP                      4 hrs 53 mins       ████░░░░░░░░░░░░░░░░░░░░░     14.42%
GitIgnore file           4 hrs 26 mins       ███░░░░░░░░░░░░░░░░░░░░░░     13.08%
Markdown                 1 hr 21 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.99%
SQL                      1 hr 19 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.92%
JSON                     1 hr 5 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.23%
Blade Template           1 hr 3 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.13%
Text                     5 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.27%
.env file                1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.09%
Docker                   0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
HTML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
TOML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
TypeScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SourceMap                0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
SmartyConfig             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      33 hrs 54 mins      █████████████████████████       100%
```
```text
📦 Categoria

Browsing                 26 hrs 24 mins      ███████████████████░░░░░░     77.87%
Coding                   7 hrs 30 mins       ██████░░░░░░░░░░░░░░░░░░░     22.13%
```
