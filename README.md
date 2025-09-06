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

Safari                   14 hrs 29 mins      ███████████░░░░░░░░░░░░░░     42.69%
PhpStorm                 7 hrs 45 mins       ██████░░░░░░░░░░░░░░░░░░░     22.86%
ChatGPT                  5 hrs 15 mins       ████░░░░░░░░░░░░░░░░░░░░░     15.49%
Warp                     3 hrs 2 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      8.94%
Postman                  1 hr 39 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.87%
Spotify                  1 hr 10 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      3.48%
DataGrip                 12 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.61%
WebStorm                 9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.47%
Notion                   6 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.34%
VS Code                  2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.13%
Slack                    2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
Insomnia                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💬 Linguagem

Other                    9 hrs 51 mins       ███████░░░░░░░░░░░░░░░░░░     29.05%
HTTP Request             9 hrs 42 mins       ███████░░░░░░░░░░░░░░░░░░     28.58%
PHP                      7 hrs 45 mins       ██████░░░░░░░░░░░░░░░░░░░     22.84%
YAML                     2 hrs 9 mins        ██░░░░░░░░░░░░░░░░░░░░░░░      6.37%
SQL                      1 hr 6 mins         █░░░░░░░░░░░░░░░░░░░░░░░░      3.26%
.env file                58 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.87%
Bash                     42 mins             █░░░░░░░░░░░░░░░░░░░░░░░░      2.09%
Markdown                 27 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.35%
Go                       21 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.03%
XML                      15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.78%
JSON                     15 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.77%
Docker                   9 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.45%
Java Properties          4 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.24%
GitIgnore file           1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░       0.1%
SonarQube for IDE Properties1 min               ░░░░░░░░░░░░░░░░░░░░░░░░░      0.08%
textmate                 0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.04%
Shell Script             0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Blade Template           0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.03%
Log                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
TOML                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.02%
INI                      0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
Text                     0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
JavaScript               0 secs              ░░░░░░░░░░░░░░░░░░░░░░░░░         0%
```
```text
💻 Sistema Operacional

Mac                      33 hrs 57 mins      █████████████████████████       100%
```
```text
📦 Categoria

Coding                   17 hrs 4 mins       █████████████░░░░░░░░░░░░     50.29%
Browsing                 14 hrs 29 mins      ███████████░░░░░░░░░░░░░░     42.69%
Debugging                1 hr 39 mins        █░░░░░░░░░░░░░░░░░░░░░░░░      4.87%
Writing Docs             29 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      1.46%
Writing Tests            11 mins             ░░░░░░░░░░░░░░░░░░░░░░░░░      0.56%
Communicating            2 mins              ░░░░░░░░░░░░░░░░░░░░░░░░░      0.12%
```
