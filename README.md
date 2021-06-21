Wordpress:

Ce repo sert à contenir mon site wordpress afin de pouvoir le récupérer et l'utiliser sur d'autres machines que la mienne.

Les pré-requis pour ouvrir ce site wordpress:

-Avoir Lamp/Wamp/Xamp installé sur sa machine
-Avoir un virtualhost disponible pour la machine(de préférence un virtualhost pour le site wordpress uniquement)

Pour pouvoir accéder au site:

1.récuperer le repo en le clonant 
![image](https://user-images.githubusercontent.com/74027695/122775740-be112500-d2aa-11eb-8949-ad8911d3bc4e.png)

2.importer la base de donnée wordpress.sql sur votre server(pour ma part je l'importe via phpmyadmin):
![image](https://user-images.githubusercontent.com/74027695/122775933-ed279680-d2aa-11eb-8648-819bb4ce3ec8.png)

3.Récuperer le contenu du dossier "site wordpress" et le deplacer vers le dossier du virtual host:
![image](https://user-images.githubusercontent.com/74027695/122776295-4394d500-d2ab-11eb-90ab-a93b68900159.png)

4.avant d'ouvrir le site,vous avant tout changer certains paramètres pour que le site puisse tourner correctement.
4.1.Donner tout les droits à tout les dossiers afin de pouvoir installer des thèmes/plugins sans avoir de soucis de droits d'installations.
![image](https://user-images.githubusercontent.com/74027695/122776677-9a9aaa00-d2ab-11eb-821f-7f4bdbe98189.png)
4.2.Vous devez ensuite modifier vos identifiants qui ont accès à votre base de données dans le fichier wp-config.php
![image](https://user-images.githubusercontent.com/74027695/122777236-214f8700-d2ac-11eb-89bf-49fe9b654008.png)

5.Vous pouvez dès à présent accéder au site wordpress.(dans le cas où vous souhaiteriez accéder aux paramètres administrateurs,les identifiants sont les suivants:
login:wordpressabdellah
password:wordpressabdellah
