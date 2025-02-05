# Nômashe | Site de Viagem 

Nômashe é um site de roteiro de viagens que busca ajudar usuários à fazerem suas viagens com a melhor expêriencia. Nele são disponibilizados roteiros para viagens ao longo de várias cidades do Brasil, apresentando os pontos turisticos mais visitados e conhecidos, que valem à pena visitar. Tudo isso de forma objetiva, compreensivel e intuitiva.

<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150" alt="Laravel Logo"></a></p>

## Passos para instalação e uso

O github disponibiliza de diversos modos para fazer upload do codigo. 

Aqui estão duas dessas formas:
<p style="display: block"> 
   <strong> 1 - </strong>  Vá até uma pasta reservada para o projeto e use o comando no "git bash" : 
    https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem.git
</p>
<p style="display: block"> 
    <strong> 2 - </strong>  Baixe o arquivo .zip do código, clicando no botão "Download .ZIP"
</p>

### Pré Requisitos

``` Ter suporte a linguagem PHP em sua maquina ```

``` Ter um editor de código (Ex.: Visual Studio Code) ```

``` Ter um sistema de hospedagem local, com suporte a banco de dados (Ex.: Xampp ) ```

``` Ter instalado em sua maquina o Gerenciador de dependências Composer ```

``` Ter instalado em sua maquina o framework Laravel ```

### Preparando ambiente

-- Abra o terminal, e na pasta do projeto, execute o código: ``` composer install ```

-- Ligue o seu servidor local apache e o servidor de banco de dados

-- Acesse a sua ferramenta de banco de dados, e crie um banco de dados com um nome que desejar (Ex: viagem_roteiros);

-- Agora, vá a raiz do código, copie um arquivo chamado  ``` .env.example ```  e cole-o nesse mesmo local, trocando o nome para apenas ```.env```.

-- Encontre esse trecho do código ``` DB_DATABASE ```  e troque o nome do banco, pelo nome do banco de dados que você acabou de criar. 

--Também encontre o trecho do código ```FILESYSTEM_DISK``` e troque o valor "local" para "public".

-- Vá ao terminal e digite este código para que as tabelas do banco sejam construidas altomaticamente:  ``` php artisan migrate ``` .  
As seguintes tabelas devem aparecer no banco de dados.

-- Agora, execute esse código no terminal, para geração de uma chave criptografada exigida pelo artisan: ``` php artisan key:generate ```

-- Execute também o código no terminal, para gerar um link entre a pasta "public" e "storage": ``` php artisan storage:link ```

-- Finalmente, execute o código no terminal, para visualização do sistema:  ``` php artisan serve ``` . 

## Observações

- Para entrar na pasta admin, coloque o seguinte caminho no final do endereço URL: ``` /workspaceadmin ```. Exemplo: ```http://127.0.0.1:8800/workspacecurso``` 

## Fotos do site

<div>
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-admin-edit-roteiro.jpg" width="500" />
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-dashboard-options.jpg" width="500" />
</div>
<div>
    <img src="https://github.com/AdrianoMiguell/SiteCursos-laravel/blob/main/.github/imagens_app/page_create_course_admin.jpg" width="500" />
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-dashboard.jpg" width="500" />
</div>
<div>
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-view-roteiro-text.jpg" width="500" />
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-view-roteiro.jpg" width="500" />
</div>
<div>
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-workspace-admin-states.jpg" width="500" />
    <img src="https://github.com/AdrianoMiguell/Projeto-integrador-site-viagem/blob/main/.github/images/nomashe-workspace-admin.jpg" width="500" />
</div>
