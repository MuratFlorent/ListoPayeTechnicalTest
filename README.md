<b>ListoPaye technical test</b>

J'ai préparé une petite application avec ma fonction présente dans ListoPayePeriod, une classe basique Absence, et un fichier AbsenceTest.php car je me sers de phpUnit.<br><br>

Avant de commencer à tester, l'environnement s'installe rapidement de la manière suivante:<br><br>

Lancer :<br><br>

docker-compose up -d composer<br>
docker-compose run composer install<br>
docker-compose up -d fpm nginx phpunit<br><br>

et tout simplement ensuite:<br><br>

docker-compose run phpunit <br><br>

Pour lancer les tests :)<br><br>

A changer les différentes valeurs à envoyer dans la classe test ^^
