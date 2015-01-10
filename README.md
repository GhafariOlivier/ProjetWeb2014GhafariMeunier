# ProjetWeb2014GhafariMeunier
Projet Web 2014 ESIEA by GHAFARY &amp; MEUNIER

Bootstrap twitter :
C:\wamp\www\Symfony\app\Resources\views\layout.html.twig

Acces au site web :
http://localhost/Symfony/web/app.php/platform

Si première connexion, nécessité de création d'un premier article :
http://localhost/Symfony/web/app.php/platform/add

php app/console generate:doctrine:entities SavannaPlatformBundle:Advert
php composer.phar update
php app/console doctrine:fixtures:load
php app/console doctrine:schema:update --dump-sql
php app/console doctrine:schema:update --force