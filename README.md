# Dashboard SvxReflector by CN8VX

# English

Dashboard SvxReflector by CN8VX is based on the svxrdb-server Dashboard. Rewritten and redesigned by CN8VX, this Dashboard is intended for use with the latest versions of the "SvxReflector" servers.

Initially, it was rewritten, redesigned, simplified, and customized specifically for the SvxReflector for Moroccan Amateur Radio Repeaters Interco (http://51.210.47.236/). However, it can be adapted to other reflectors by following the modification steps described below.

The Dashboard SvxReflector by CN8VX can be viewed on PCs, tablets, and smartphones. You can switch between LIGHT MODE and DARK MODE by simply clicking the button on the Dashboard page.

## Modifications Made:
- Customization of the `index.php` file.
- Consolidation and organization of CSS files for themes into a single folder for better management.
- Project file reorganization:
  - Creation of `icon`, `img`, `include`, and `scripts` folders for a cleaner and more organized file structure, making resource management easier.

## INSTALLATION:

### Step 1: Configuring the `svxreflector.conf` file

1. Edit the `svxreflector.conf` file located in the `/etc/svxlink` directory:
```
sudo nano /etc/svxlink/svxreflector.conf
```
2. Set in the `[GLOBAL]` part:
```
TIMESTAMP_FORMAT="%d.%m.%Y %H:%M:%S"
```
3. Restart the reflector service:
```
sudo systemctl restart svxreflector
```
### Step 2: Downloading and installing the Dashboard files

1. Make sure you are in the `/var/www` directory. Then delete the `html` directory:
```
cd /var/www
```
```
sudo rm -rf html
```
2. Then use the following command to download and copy all the contents into the `/var/www/html` directory:
```
sudo git clone https://github.com/CN8VX/Dashboard_SvxReflector_by_CN8VX.git html
```

## To adapt the Dashboard to your Reflector, follow these steps:
1. Edit the file "config.php" located in `/var/www/html/include/config.php`:
   - Set the timezone. You can find the available timezones on this site: https://www.php.net/manual/en/timezones.php.
   - Modify the page title.
   - Set the log file path if it’s not the default `/var/log/svxreflector` or if you have added an extension, e.g., `/var/log/svxreflector.log`.
   - Set the language and legend display: FR for French, FR-I for French with indication, or EN for English.
   - Set the number of lines to display in the "Logfile" section.

2. Organize your resources:
   - Place your logos, icons, and images in the `/html/img` folder to customize `index.php`.

3. Edit the `index.php` file:
   - Replace `logo.png` with your logo or the image of your choice that you have uploaded to the `/html/img` folder.
   - Customize the scrolling text to suit your needs.
   - Customize, rename, and configure the button links as needed.
   - Customize the instruction text at the top of the table.

**NB**: Don’t forget to edit and modify the `/var/www/html/include/tgdb.php` file to add and rename your TalkGroups, and the `/var/www/html/include/userdb.php` file to add and rename the reflector users.

This version of the Dashboard is stable, but new features and improvements may be introduced in future updates of the SvxReflector Dashboard by CN8VX.

I encourage you to send me your comments and suggestions or corrections to the following address: cn8vx.ma@gmail.com

73. CN8VX, SYSOP of the DMR-MAROC SERVER.


# French

Dashboard SvxReflector by CN8VX est basé sur le Dashboard svxrdb-server. Réécrit et reconçu par CN8VX, ce Dashboard est destiné à être utilisé avec les nouvelles versions des serveurs "SvxReflector".

Il a d'abord été réécrit, reconçu, simplifié et personnalisé spécifiquement pour le SvxReflector for Moroccan Amateur Radio Repeaters Interco (http://51.210.47.236/). Toutefois, il peut être adapté à d'autres réflecteurs en suivant les étapes décrites ci-dessous.

Le Dashboard SvxReflector by CN8VX peut être visualisé sur PC, tablette, et smartphone. Vous pouvez changer de thème (LIGHT MODE ou DARK MODE) en cliquant simplement sur le bouton qui se trouve sur la page du Dashboard.

## Modifications Apportées :
- Personnalisation du fichier `index.php`.
- Rassemblement et organisation des fichiers CSS pour les thèmes dans un seul dossier pour une meilleure gestion.
- Réorganisation des fichiers du projet :
  - Création des dossiers `icon`, `img`, `include`, et `scripts` pour une structure de fichiers plus propre et organisée, facilitant ainsi la gestion des ressources.

## INSTALLATION :

### Étape 1 : Configuration du fichier `svxreflector.conf`

1. Éditez le fichier `svxreflector.conf` qui se trouve dans le répertoire `/etc/svxlink` :
```
sudo nano /etc/svxlink/svxreflector.conf
```
2. Définissez dans la partie `[GLOBAL]` :
```
TIMESTAMP_FORMAT="%d.%m.%Y %H:%M:%S"
```
3. Redémarrez le service du réflecteur :
```
sudo systemctl restart svxreflector
```
### Étape 2 : Téléchargement et installation des fichiers du Dashboard

1. Assurez-vous d'être dans le répertoire `/var/www`. Puis supprimez le répertoire `html`:
```
cd /var/www
```
```
sudo rm -rf html
```
2. Ensuite, utilisez la commande suivante por télécharger et copier tout le contenu dans le répertoire /var/www/html :
```
sudo git clone https://github.com/CN8VX/Dashboard_SvxReflector_by_CN8VX.git html
```

## Pour adapter le Dashboard à votre Réflecteur, suivez les étapes suivantes :
1. Éditez le fichier "config.php" qui se trouve dans `/var/www/html/include/config.php` :
   - Définissez le fuseau horaire. Vous trouverez les fuseaux horaires sur ce site : https://www.php.net/manual/en/timezones.php.
   - Modifiez le titre de la page.
   - Définissez le chemin du fichier journal (log) si ce n’est pas par défaut `/var/log/svxreflector`, ou si vous avez ajouté une extension, par exemple : `/var/log/svxreflector.log`.
   - Définissez la langue et l’affichage de la légende : FR pour Français, FR-I pour Français avec indication, ou EN pour Anglais.
   - Définissez le nombre de lignes à afficher dans la section "Logfile".

2. Structurez vos ressources :
   - Placez vos logos, icônes, et images dans le dossier `/html/img` pour personnaliser `index.php`.

3. Éditez le fichier `index.php` :
   - Remplacez `logo.png` par votre logo ou l'image de votre choix, que vous avez téléchargée dans le dossier `/html/img`.
   - Personnalisez le texte défilant selon vos besoins.
   - Personnalisez, renommez, et configurez les liens des boutons selon vos besoins.
   - Personnalisez le texte des consignes qui se trouvent en haut du tableau.

**NB** : N’oubliez pas d’éditer et de modifier le fichier `/var/www/html/include/tgdb.php` pour ajouter et renommer vos TalkGroups, ainsi que le fichier `/var/www/html/include/userdb.php` pour ajouter et renommer les utilisateurs du réflecteur.

Cette version du Dashboard est stable, mais de nouvelles fonctionnalités et améliorations pourraient être introduites dans les prochaines mises à jour du Dashboard SvxReflector by CN8VX.

Je vous encourage à m'envoyer vos commentaires et suggestions ou des corrections à l'adresse suivante : cn8vx.ma@gmail.com

73 de CN8VX, SYSOP du SERVEUR DMR-MAROC.
