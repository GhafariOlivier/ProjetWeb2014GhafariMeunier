# ProjetWeb2014GhafariMeunier
Projet Web 2014 ESIEA by GHAFARY &amp; MEUNIER

Screenshots du site en prod dans le dossier Screenshots.
Plusieurs tentatives de mises en lignes ont été faites sur servers gratuits, mais aucune des offres gratuites ne donnait assez de droits/fonctionnalités pour heberger mon application Symfony.

Bootstrap twitter visible:
\Symfony\app\Resources\views\layout.html.twig

Si première connexion au site web : (nécessité de création d'un premier article)
http://localhost/Symfony/web/app.php/platform/add

Acces au site web :
localhost/Symfony/web/app.php/platform

Les bundles et extensions ont été utilisés :
Fixtures, Stof doctrine, Gedmo, "Slug"...

Commandes consoles couramment utilisées :
php app/console generate:doctrine:entities SavannaPlatformBundle:Advert
php app/console doctrine:fixtures:load
php app/console doctrine:schema:update --dump-sql
php app/console doctrine:schema:update --force
php composer.phar update


