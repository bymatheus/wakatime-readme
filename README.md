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

PhpStorm                 25 hrs 55 mins      ███████████████████████░░     92.23%
VS Code                  1 hr 41 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      6.05%
DataGrip                 29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.72%
```
```text
💬 Linguagem

Blade Template           11 hrs 33 mins      ██████████░░░░░░░░░░░░░░░     41.14%
SCSS                     7 hrs 17 mins       ██████░░░░░░░░░░░░░░░░░░░     25.97%
PHP                      5 hrs 14 mins       █████░░░░░░░░░░░░░░░░░░░░     18.67%
JavaScript               1 hr 37 mins        █░░░░░░░░░░░░░░░░░░░░░░░░       5.8%
YAML                     41 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.47%
SQL                      29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.72%
JSON                     25 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.54%
Docker                   15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.94%
SourceMap                12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.72%
SmartyConfig             8 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.49%
CSS                      7 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.44%
htaccess                 1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.07%
Markdown                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
ReST                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.01%
Apache Config            0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      28 hrs 6 mins       █████████████████████████       100%
```
```text
📦 Categoria

Coding                   28 hrs 6 mins       █████████████████████████       100%
```
