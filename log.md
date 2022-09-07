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