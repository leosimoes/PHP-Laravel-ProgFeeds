# ProgFeeds

## Ambiente de desenvolvimento
As ferramentas e suas versões utilizados no desenvolvimento foram:
- PHP 8.4
- Laravel 12
- Laravel Heard 1.22.3
- PHP Storm 2025.2.4

![Image-04-PhpStorm](images/Image-04-PhpStorm.png)

Verifique as versões do PHP e Laravel installer com `php -v` e `laravel -v` no terminal/cmd.

![Image-01-cmd](images/Image-01-cmd.png)

## Execução do projeto
Abra o Laravel Herd e vá em Sites -> PHP-Laravel-ProgFeeds.test -> General -> URL
e verifique a execução no navegador.

![Image-02-Laravel Heard](images/Image-02-LaravelHeard-URL.png)

![Image-03-Chrome-URL](images/Image-03-Chrome-URL.png)

Adicione o diretório do projeto na seção de Sites no Laravel Herd caso seja necessário.


## Desenvolvimento
1. Criar página home:
- Em **resources/views**: criar arquivo *home.blade.php* para a página home.
- Em **routes/web.php**: mapear a rota *"/laravel"* para a página *welcome* e a rota *"/"* para a página *home*. 

![Image-05-Home](images/Image-05-Home-1.png)


## Referências
Laravel - Getting Started:
https://laravel.com/learn/getting-started-with-laravel

Learn Laravel from Scratch [FULL BOOTCAMP COURSE]:
https://www.youtube.com/watch?v=MOLZOXqaomM
