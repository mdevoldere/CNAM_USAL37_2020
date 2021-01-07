# Bases de Données

## Travaux pratiques : Projet Freelancer

Depuis peu, vous vous êtes lancé en tant que développeur indépendant, vous faites désormais partie de la grande famille des "développeurs Freelance".

En tant que Freelance, vous devez gérer votre portefeuille clients et planifier les diverses missions que vous acceptez.

Pour chaque mission que vous acceptez : 
1. vous enregistrez les informations du client
2. vous enregistrez les informations de la mission
3. vous définissez un tarif forfaitaire pour la mission
4. un devis est créé
5. Si le devis est refusé :
    - le devis peut-être modifié pour une 2nde proposition
    - la mission est clôturée (mais pas supprimée)
5. Si le devis est accepté, il est transformé en facture



Après de longues recherches, vous décidez finalement de créer votre propre application de gestion ce qui vous permettra d'y inclure toutes les fonctionnalités dont vous aurez besoin.

Afin de pouvoir accéder à votre logiciel à distance, votre choix s'est porté sur une application Web et vous décidez de la développer avec PHP. 

Votre application devra respecter l'architecture MVC.


### Fonctionnalités :

- Gérer le portefeuille clients
    - Ajouter, éditer et supprimer des clients
    - Gérer les catégories de clients (particulier, entreprise, association, secteur public...)
- Gérer les missions
    - Créer/modifier/supprimer une mission
- Gérer les devis et la facturation
    - Afficher un devis ou une facture lié(e) à une mission (avec infos mission + client)
    - Afficher une facture globale d'un client (toutes les missions associées au client y sont inscrites)





## Travail à réaliser 

A partir des diagrammes ci-dessous, créez le script SQL de création de la base de données "tp_freelancer".

**Nom du fichier** :  "tp_freelancer_init.sql"

Le script doit inclure :

- la création de la base de données avec le charset **utf8mb4_unicode_ci**
- La création des tables
- La création des contraintes de clés étrangères (foreign keys)





## MCD

![MCD](TP_Freelancer_MCD.png)





## MLD

![MCD](TP_Freelancer_MLD.png)






## Compétences mises en œuvre

- SQL
- MySQL
- Analyse de diagramme
