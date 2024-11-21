# Evaluation en cours de formation Studi

### Nom de l'application : App-arcadia-ecf
---
###
1. Installer l'environnement de travail (LAMP)

    - 1.1 Version des outils de l'environement de travail

        - Serveur :
            
            - Apache 2.4
            
            - PHP 8.2

        - Backend : 

            - PHP 8.2

        - Frontend :

            - HTML 5

            - CSS 3
            
            - Javascript ES6

        - Versioning :

            - Github 2.39

    - 1.2 Système d'exploitation  
        
        - Linux (distibution Debain 12)

    - 1.3 Installation du serveur Apache et démarage du service  

        - `apt install apache2 apache2-doc`  

        - `systemctl enable --now apache2`

    - 1.4 Installation de la base de donnée MariaDB et démarage du service
        
        - `apt install mariadb-server`  
        
        - `systemctl enable --now mariadb.service`  

        - `mysql_secure_installation`

            - Enter current password for root (enter for none) => Enter
            - Switch to unix_socket authentication => No
            - Change the root password? => Yes
            - Remove anonymous users? => Yes
            - Disallow root login remotely? => Yes
            - Remove test database and access to it? => Yes
            - Reload privilege tables now? => Yes

    - 1.5 Installation de la base de PHP

        - `apt install php php-cli libapache2-mod-php`

            - Installation des modules complémentaires

                - `apt install php-{curl,gd,intl,memcache,xml,zip,mbstring,json,mysql}`

                    - Relancer le serveur apache

                        - `systemctl reload apache2`
    
    - 1.6 Installer Git pour gérer le projet

        - `apt install git`
##

2. Déploiement local et obtenir le projet via le repository Github

    - Créer un dossier pour cloner le projet

        - `mkdir arcadia-zoo`

    - Se rendre dans le dossier

        - `cd arcadia-zoo`

    - Cloner le projet

        - `git clone https://github.com/Mike-mg/app-arcadia-ecf.git`

    - Creation du VirtualHost 

        - Se rendre dans le dossier du projet cloner et déplacer le dossier dans le dossier "/var/www"

            - `mv app-arcadia-ecf /var/www`

        - Créer le fichier de configuration
            
            - `touch /etc/apache2/sites-available/arcadia-zoo-ecf.conf`

                - Inserer le texte ci-dessous :

                    ```bash
                    <VirtualHost *:80>  
                        ServerName "www.arcadia-zoo-ecf.fr"  
                        ServerAlias "arcadia-zoo-ecf.fr"  
                        DocumentRoot "/var/www/arcadia-zoo-ecf"  
                        DirectoryIndex index.php index.html  
                        ErrorLog  "/var/www/arcadia-zoo-ecf/logs/error.log"  
                        CustomLog "/var/www/arcadia-zoo-ecf/logs/access.log" combined  
                        <Directory "/var/www/arcadia-zoo-ecf">  
                            Options +Indexes +Includes +FollowSymLinks  
                            AllowOverride All  
                            Require all granted  
                        </Directory>
                    </VirtualHost>
                    ```

        - Activer le virtualHost

            - `a2ensite arcadia-zoo-ecf`

        - Ajouer le nom du serveur dans le fichier /etc/hosts

            - `echo -e "127.0.0.1 www.arcadia-zoo-ecf.fr arcadia-zoo-ecf.fr" >> /etc/hosts`

        - Redémarrer apache

            - `systemctl reload apache2`

##
3. Déploiement en production du site via l'hébergeur O2switch  

    - 3.1 Sélectionner une offre  

        - Offre "Unique tout en un" choisi

    - 3.2 Mise en production via Git Version Control de l'outils Cpanel

        - Clicker sur "Créer"
        - Indiquer le lien du repository du projet
        - Préciser le dossier de réception à "public_html"
        - Clicker sur "Créer" à nouveau pour finaliser le clonage du repository

    - 3.3 Mettre à jour le projet sur le serveur

        - Dans Cpanel section "Avancé", ouvrir le teminal
        - Se rendre dans le dossier public_html
        - Taper `git pull`

    - 3.4 Activer le SSL du site
        - Dans Cpanel section "Sécurité", choisir "Let's Encrypt SSL"
        - Sélectionner le site du projet et clicker sur "Générer"
        - Quelques miniutes plus tard, le site aura la certification Let's Encrypt et sera sécurisé




-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


Trello : : https://trello.com/b/Gj4oYQbu/ecf

