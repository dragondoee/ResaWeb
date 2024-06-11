■ l’URL du site web en ligne

https://resaweb.desgranges.butmmi.o2switch.site

■ Tableau des règles de qualité Web Opquast et des règles A11y

https://docs.google.com/spreadsheets/d/1PXqrYxyBxoaoG_XgkSaAI1uBQsU8wGp7OIcTbWJPpjg/edit?usp=sharing 

■ Une description complète de la procédure à faire pour réinstaller le site et la base de données sur un serveur local XAMPP, on précisera l’URL locale à utiliser pour y accéder.


- Tout d'abord, il faut avoir un serveur local installé (XAMPP, MAMPP ou WAMPP) et avoir accès au gestionnaire de fichier et à la base de donnée du site.


- Pour les fichiers :
Dans le gestionnaire, sélectionner tous les fichiers et ziper le tout. Télécharger le dossier.
Mettez le zip dans le dossier de site du serveur local : www par exemple.
Déziper le.


- Pour la base de données :
Accéder au PhpMyAdmin de votre site hébergé. Exporter la base de données en fichier SQL.
Assurer vous que votre serveur local est lancé. Accéder au PhpMyAdmin de votre serveur local.
Créer une nouvelle base de données et importer votre fichier SQL précédemment téléchargé.


- Connecter votre BDD et votre site local :
Chercher le fichier "connexion.php" et changer les informations pour se connecter à la base de données.
Pour WAMPP, l'utilisateur est 'root' et le mot de passe est ''.


- Vérifier que votre site fonctionne en local :
Assurez vous que votre serveur local est lancé.
Vous pouvez y accéder avec l'URL suivante : ( le nom du dossier est à adapter)
http://localhost/nom-du-dossier


Pour ce site, si aucune modification n’a été apporté au nom du dossier, ça sera :
http://localhost/resaweb