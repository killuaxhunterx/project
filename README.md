# Find Your Next Job  
**Um HUB completo para conectar talentos e empresas.**

## Info  
**Find Your Next Job** é um projeto desenvolvido em 15 dias com base nas aulas do canal [Laracasts](https://www.youtube.com/watch?v=SqTdHCTWqks&ab_channel=Laracasts).  
Essa plataforma serve tanto para pessoas em busca de novas oportunidades de emprego quanto para empresas que desejam recrutar profissionais qualificados.

## Recursos  
- Cadastro e listagem de vagas de emprego.  
- Busca por palavras-chave e localização.  
- Filtros avançados para encontrar o emprego ideal.  
- Interface responsiva e moderna com Tailwind CSS.

## Tecnologias  
Este projeto utiliza:  
- **Laravel** (Framework PHP)  
- **API RESTful**  
- **Arquitetura MVC**  
- **CSS com Tailwind**

Nota: eu utilizei a bliblioteca faker para gerar dados e informações.

## Instalação  
1. Certifique-se de que o Composer está instalado no seu computador.
   
2. Entre na pasta do projeto:  
    ```bash
    cd project
    ```
3. Crie o projeto com o comando:  
    ```bash
    composer create-project find_your_next_job/project --stability dev
    ```

## Uso  
1. Crie e configure o banco de dados e aplique as migrações:  
    ```bash
    php artisan migrate --seed
    ```
2. Limpe os caches e otimize o projeto:  
     ```bash
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan optimize
    ```
