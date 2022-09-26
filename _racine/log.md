***Log***

*06 Septembre 2022*
- Reprise du projet
- Update de la feuille de route
- Création du log
- Installation de Symfony
    - [x] Installation de php
        - [x] Passage sur ubuntu
        - [x] Import du repo
            - [x] Ajout de la ssh key ubuntu wsl à Github
            - [x] Git clone
        - [x] Passage à WSL2 forcé ```wsl --set-version Ubuntu-20.04 2``` dans powershell
        - [x] Check de la version de php sur ubu 20.04
            - [x] ```php -v``` renvoie 
            ```
            PHP 7.4.3 (cli) (built: Jul  5 2021 15:13:35) ( NTS )
            ```
        - [x] Installation de Symfony 5.4lts
            - [x] Check de la version de composer sur ubu 20.04
            - [x] ```composer -v``` renvoie 
            ```
            Composer 1.10.1 2020-03-13 20:34:27
            ```
            - [x] Check de la version de symfony sur ubu 20.04
            - [x] ```symfony``` renvoie 
            ```
            Symfony CLI version v4.25.5 (c) 2017-2022 Symfony SAS
            ```
            - [x] Création du projet avec la commande ```symfony new my_project_directory --version=5.4```
- [x] Projet accessible depuis http://127.0.0.1:40831/ avec la commande ```symfony server:start```

*07 Septembre*
- [x] Import projet sur ubuntu 17'
    - [x] Création du projet avec la commande ```symfony new TDT_app --version=5.4``` pour éviter les embed
    - [x] Suppression et recréation du symfony dans le bon dossier.
- [x] Projet accessible et fonctionnel en symfony 5.4.12

*08 Septembre*
- [x] Création du fichier *references.md* pour consigner les sites consultés
- [x] Consultation de la documentation symfony sur le testing
- [ ] Installation du test-pack de symfony
    - [x] Résolution de la dépréciation de composer 1 en upgradant à composer 2
        - [x] Tentative d'upgrade avec ```composer self-update --2```
        - [x] Résolution de l'erreur 
            ```
            Command "self-update" is not defined. 
            ```
            - [x] Consultation de (https://stackoverflow.com/questions/37772798/unable-to-self-update-composer)
            - [x] Désinstallation de composer avec ```sudo apt-get remove composer```
            - [x] Clean suggéré par la console : ```sudo apt autoremove``` effecté
    - [x] Installaion de composer 2
        - [x] ```php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"```
        - [x] ```php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"```
        - [x] ```php composer-setup.php``` renvoie 
        ```
        Composer (version 2.4.1) successfully installed to: /home/gostoff/hub/TdtEnTDD/composer.phar
        Use it: php composer.phar
        ```
        - [x] Extraction & use ```php -r "unlink('composer-setup.php');"```
        - [x] Installation de composer en global ```sudo mv composer.phar /usr/local/bin/composer```
        - [x] Utilisation de ```alias composer='/usr/local/bin/composer'``` pour appeler composer depuis partout
    - [x] ```composer require --dev symfony/test-pack```

*09 Septembre*
- [x] Installation du test-pack de symfony
    - [x] Utilisation de la commande ```composer require --dev symfony/test-pack```
    - [x] Premier appel de PHPUnit ```php bin/phpunit```
    - [x] Retour fonctionnel qui donne : 
    ```
    PHPUnit 9.5.24 #StandWithUkraine

    No tests executed!
    ```

*10 Septembre*
- [x] Création du 1er test
    - [x] Création du fichier /tests/httpResponseTest.php
- [ ] Résolution du warning : 
```
1) Warning
No tests found in class "HttpResponseTest".

WARNINGS!
Tests: 1, Assertions: 0, Warnings: 1.
```

*25 Septembre* 
- [x] Pull du projet sur pcfixe
- [x] Installation du test-pack de symfony sur le ubuntu local
    - [x] Utilisation de la commande ```composer require --dev symfony/test-pack```
    - [x] Premier appel de PHPUnit ```php bin/phpunit```
- [x] Écriture du test du Pagecontroller
- [x] Création du PageController avec make
    - [x] Installation en local du make bundle avec ```composer require symfony/maker-bundle --dev```
        - [x] Installation du package annotations nécessaire au make avec ```composer require doctrine/annotations ```

*26 Septembre* 
- [x] Installation de twig
- [x] Résolution du test non trouvé 
    ```
    No tests found in class
    ```
    - [x] Check de (https://stackoverflow.com/questions/27599100/phpunit-tests-gives-warning-no-tests-found-in-class)
    - [x] Rectification de typo, la fonction TestHelloPage() doit s'écrire avec minuscule -> testHelloPage()
- [x] Installation du plug in Intelephense
- [x] Installation des snippets pour twig et html en local (ubu 20.04)
- [x] Écriture du test de contenu h1
    - [x] Écriture du code de contenu h1
- [x] Écriture du test de réponse http unauthorized