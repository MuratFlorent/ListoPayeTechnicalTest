ListoPaye technical test

J'ai préparé une petite application avec ma fonction présente dans ListoPayePeriod, une classe basique Absence, et un fichier AbsenceTest.php car je me sers de phpUnit.

Avant de commencer à tester, l'environnement s'installe rapidement de la manière suivante:

Lancer :

docker-compose up -d composer
docker-compose run composer install
docker-compose up -d fpm nginx phpunit

et tout simplement ensuite:

docker-compose run phpunit 

Pour lancer les tests :)

A changer les différentes valeurs à envoyer dans la classe test ^^