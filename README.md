# Clients API Laravel - Teste
Teste feito em laravel para uma vaga, o teste é criar uma api rest em laravel e mysql.

### Como configurar o ambiente

Para instalar o projeto primeiro devemos prosseguir instalando as dependências do composer, tem 2 modos para rodar em desenvolvimento basta utilizar o comando:

    composer install

e para rodar em produção o comando é:


    composer install --optimize-autoloader --no-dev

que ira otimizar o auto loader  do composer para produção e não vai instalar bibliotecas de desenvolvimento.

Após isso vamos para etapa de criar o banco de dados MySQL, execute o seguinte comando em seu console mysql ou no phpmyadmin como preferir:

    CREATE DATABASE laravel_api;

Após isso copie o ".env.exemple" e renomeie para ".env", após isto é necessário rodar o seguinte comando:

    php artisan key:generate

para gerar a chave de segurança, agora podemos prosseguir com a configuração do arquivo ".env" subistituindo está escrito "NOME_DO_BANCO_DE_DADOS" por o respectivo nome do banco de dados, "NOME_DO_USUARIO_DO_BANCO_DE_DADOS" pelo nome do usuário do MySQL ou MariaDB e "SENHA_DO_SEU_BANCO_DE_DADOS" pela senha do usuário.

E caso vá rodar em produção substituir "http://clientes_api.test" pela URL de produção,e o "APP_ENV=local" para  "APP_ENV=production" e por ultimo o "APP_DEBUG=true" por "APP_DEBUG=false".

    APP_NAME=Laravel  
    APP_ENV=local  
    APP_KEY=base64:iMuZK2Mo59qC88WL36THBjiXeA796AxRdm+3FM6P5xA=  
    APP_DEBUG=true  
    APP_URL=http://clientes_api.test  
      
    LOG_CHANNEL=stack  
    LOG_DEPRECATIONS_CHANNEL=null  
    LOG_LEVEL=debug  
      
    DB_CONNECTION=mysql  
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=NOME_DO_BANCO_DE_DADOS
    DB_USERNAME=NOME_DO_USUARIO_DO_BANCO_DE_DADOS
    DB_PASSWORD=SENHA_DO_SEU_BANCO_DE_DADOS  
      
    BROADCAST_DRIVER=log  
    CACHE_DRIVER=file  
    FILESYSTEM_DRIVER=local  
    QUEUE_CONNECTION=sync  
    SESSION_DRIVER=file  
    SESSION_LIFETIME=120  
      
    MEMCACHED_HOST=127.0.0.1  
      
    REDIS_HOST=127.0.0.1  
    REDIS_PASSWORD=null  
    REDIS_PORT=6379  
      
    MAIL_MAILER=smtp  
    MAIL_HOST=mailhog  
    MAIL_PORT=1025  
    MAIL_USERNAME=null  
    MAIL_PASSWORD=null  
    MAIL_ENCRYPTION=null  
    MAIL_FROM_ADDRESS=null  
    MAIL_FROM_NAME="${APP_NAME}"  
      
    AWS_ACCESS_KEY_ID=  
    AWS_SECRET_ACCESS_KEY=  
    AWS_DEFAULT_REGION=us-east-1  
    AWS_BUCKET=  
    AWS_USE_PATH_STYLE_ENDPOINT=false  
      
    PUSHER_APP_ID=  
    PUSHER_APP_KEY=  
    PUSHER_APP_SECRET=  
    PUSHER_APP_CLUSTER=mt1  
      
    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"  
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

Após isso devemos executar o comando para instalar as migrations no banco de dados execute o seguinte comando:

    php artisan migrate

Após isso irei utilizar o servidor built-in do laravel para testar a aplicação para executar o servidor digite:

    php artisan serve

Após isso você verá o seguinte texto em seu console:

    Starting Laravel development server: http://127.0.0.1:8000
    [Thu Jan 13 18:20:54 2022] PHP 8.0.14 Development Server (http://127.0.0.1:8000) started

Ou seja ele indicou qual url devemos acessar para os testes, junto com o projeto estará disponibilizado um arquivo do insomnia para testarmos a aplicação, fica agora um vídeo do teste sendo feito e a instalação do zero.

Nome do arquivo do insomnia: clients_api_laravel_Insomnia_2022-01-13.json
Link do video: https://youtu.be/k2Ers0JuZis
