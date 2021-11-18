https://laravel.com/docs/8.x/sanctum#api-token-authentication

https://www.avyatech.com/rest-api-with-laravel-8-using-jwt-token/

https://www.toptal.com/laravel/restful-laravel-api-tutorial


https://www.conventionalcommits.org/en/v1.0.0/


https://codelapan.com/post/laravel-8-rest-api-authentication-with-sanctum#mcetoc_1ffq8u8es4v

https://dev.to/shaileshjadav/laravel-8-rest-api-authentication-using-sanctum-3eb8

https://meritocracy.is/blog/2021/02/08/laravel-creating-restful-api-for-your-website/

# Modificações realizadas:

## [Token Ability Middleware](https://laravel.com/docs/8.x/sanctum#token-ability-middleware)

*Abilities* permite adicionar ao *token* ações que podem ser realizadas conforme o escopo.

Adicionar em: `app/Http/Kernel.php` => `$routeMiddleware`

'abilities' => \Laravel\Sanctum\Http\Middleware\CheckAbilities::class,
'ability' => \Laravel\Sanctum\Http\Middleware\CheckForAnyAbility::class,

## Criação do *controller*

`php artisan make:controller ApiController`

## Rotas para a API

Adicionar em: `routes/api.php`.