# Fornecedores
Projeto de  gerencia de tabelas migrations no laravel

# Procedimentos realizados

## Criando o a pasta do projeto e configurando php
 - Crie uma pasta no caminho xampp/htdocs chamada Fornecedores
 - Retire o "." do texto ".extension=zip" do arquivo php.init no caminho xampp/php
 - Abra a pasta com o vscode
 - Abra o xampp control e ative o mysql

## Instalando o Laravel
  - Abra um terminal de comando no vscode e use esse comando para instalar o laravel no seu projeto
 ```bash
  composer global require laravel/installer
 ```

<img width="430" height="131" alt="image" src="https://github.com/user-attachments/assets/88658fca-5636-47fc-8bdc-c296682ef717" />

 ## Criando o projeto
 - Use esse comando para criar um projeto chamado Fornecedores dentro da pasta
 ```bash 
 laravel new example-app
 ```
 - Escolha as opções none; 1; mysql; yes; yes.

## Criando as migrations
- Acessse o projeto com:
```bash
cd Fornecedores
```
- Crie a primeira migration Cadastro com o comando:
```bash
php artisan make:migration create_cadastro_table
```

<img width="698" height="68" alt="image" src="https://github.com/user-attachments/assets/3b65d473-3a18-4dbc-9cd2-f839c612353f" />

- Crie a segunda migration Estoque com o comando:
```bash
php artisan make:migration create_estoques_table
```

<img width="686" height="61" alt="image" src="https://github.com/user-attachments/assets/1d2f2668-3d28-43b8-9f3b-2aa7d8657f6d" />

no final as duas migrions criadas deverá estar assim:

<img width="474" height="142" alt="image" src="https://github.com/user-attachments/assets/b289c2fe-65e8-4692-9370-19f8b14ee97d" />

## Alterando o arquivo das migrations
- No arquivo da migration Cadastro, o deixe da seguinte forma:
  
<img width="546" height="428" alt="image" src="https://github.com/user-attachments/assets/aff7beb8-1e49-468a-8914-d522efa3e255" />

- E o arquivo do Estoque assim:

<img width="691" height="431" alt="image" src="https://github.com/user-attachments/assets/7fcc0676-7838-49a4-a8f0-4fda2ee33be5" />

## Criando migration de alteração
- Crie a migration
```bash
php artisan make:migration add_razao_social_and_nome_fantasia_to_cadastros_table 
```

<img width="772" height="67" alt="image" src="https://github.com/user-attachments/assets/cb06e860-ab96-45dc-8d0d-38b72c7d02ae" />

- Altere o arquivo da migration
  
<img width="547" height="416" alt="image" src="https://github.com/user-attachments/assets/5c0fd27b-6bdc-4cff-8de3-b4799e372d46" />

- Execute as migrations

<img width="800" height="379" alt="image" src="https://github.com/user-attachments/assets/c81fd620-70aa-44af-a7bf-4692273d78a4" />

## Conferindo as migrations no phpMyAdmin
- Acesse o servidor do phpMyAdmin no xampp e confira se as migrations estão corretas

  <img width="1161" height="478" alt="image" src="https://github.com/user-attachments/assets/fb670b93-f2c2-438e-ac50-4f028df81760" />

  <img width="1177" height="516" alt="image" src="https://github.com/user-attachments/assets/d116bcd8-fd57-48fb-869c-62a7b71422e9" />








