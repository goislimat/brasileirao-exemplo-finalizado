# Instruções para Funcionamento

### Para ter esse sistema funcionando em seu computador, siga as instruções a seguir

Abra o seu terminal ou git bash antes mesmo de conectar na máquina virtual

Acesse sua pasta de projetos e dentro dela, rode o comando abaixo para clonar do repositório remoto:

    git clone git@github.com:goislimat/brasileiro.git Brasileiro

Entre na pasta e instale as dependências registradas no composer

    composer update

Duplique o arquivo .env.example com o nome de .env e coloque suas informações de banco de dados.

Crie um banco de dados com o mesmo nome informado no arquivo .env

Agora, gere uma key para sua aplicação.

    php artisan key:generate

Depois, rode as migrações de banco de dados.

    php artisan migrate

Tudo feito. É só testar.