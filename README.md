# B1 - PHP - Examen

## Mode de rendu

Lien vers votre dépôt Git, que je pourrai clôner.

## Critères d'évaluation

- Utilisation de l'inclusion de fichiers
- Séparation de templates
- Création de fonctions pour mieux séparer / organiser / réutiliser votre code
- Utilisation de PDO pour effectuer des requêtes (préparées ou non) vers la base de données
- Utilisation des sessions et authentification

## Questions théoriques

Répondez à ces questions dans le `README` de votre projet.

- Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?
- Quelle est la différence entre `include`, `include_once`, `require` et `require_once` ?
- Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?
- Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO ?
- Quelle est la différence entre une requête préparée et une requête non préparée ?
- Quelle est la différence entre la méthode `GET` et la méthode `POST` ?

## Projet

Vous allez réaliser un système de gestion d'utilisateurs avec inscription. N'importe quel visiteur pourra également s'abonner à votre newsletter.

## Structure de l'application

L'application contiendra :

- Une page d'accueil **publique**
- Une page d'inscription **publique**
- Une page de login **publique**
- Une page de liste d'utilisateurs **protégée par authentification**
- Une page de liste d'emails de la newsletter **protégée par authentification**
- Une page pour créer un nouvel utilisateur **protégée par authentification**
- Une page pour modifier un utilisateur **protégée par authentification**
- Une fonctionnalité de suppression d'utilisateur **protégée par authentification**
- Une fonctionnalité de suppression d'email dans la newsletter **protégée par authentification**

## Rôles

Vous inclurez dans votre table d'utilisateurs **un système de rôles** :

- Un **administrateur** pourra accéder à **toutes les pages** protégées par authentification
- Un **utilisateur simple** ne pourra accéder à **aucune des pages** protégées par authentification

> Lors de l'inscription d'un utilisateur, il aura le rôle d'utilisateur simple
>
> *Vous êtes libres sur le choix de l'implémentation des rôles*

## Structure de l'interface

- Header avec menu (un lien "Déconnexion" devra apparaître quand un utilisateur administrateur sera connecté)
- Contenu
- Footer : un formulaire d'inscription à la newsletter (**uniquement visible sur les pages publiques**)

## Structure de la base de données

### Table : users

| Champ | Type | Commentaire |
|---|---|---|
| ID | INT | PRIMARY KEY AUTO_INCREMENT |
| login | VARCHAR(255) | AJOUTER UN INDEX UNIQUE SUR CE CHAMP |
| password | VARCHAR(255) | contiendra un hash bcrypt du mot de passe de l'utilisateur |
| email | VARCHAR(255) | |
| active | TINYINT(1) | 1 si l'utilisateur est actif, 0 sinon |

> Pour les rôles, vous pouvez faire un champ directement dans la table (VARCHAR), contenant un libellé définissant le rôle de l'utilisateur ("user" ou "admin" par exemple), ou bien dans une table liée si vous vous sentez de le faire ! Je n'impose pas d'implémentation pour cette fonctionnalité. **Si vous voulez aller plus vite, faites un champ texte**

### Table : newsletter

| Champ | Type | Commentaire |
|---|---|---|
| ID | INT | PRIMARY KEY AUTO_INCREMENT |
| email | VARCHAR(255) | AJOUTER UN INDEX UNIQUE SUR CE CHAMP |

## Inscription à la newsletter (dans le footer publique)

Ce formulaire permettra de saisir son adresse email. Il sera présent dans toutes les pages publiques.

Cette adresse sera enregistrée dans la table `newsletter`.

## Page d'accueil

Le contenu est libre.

## Page d'inscription

Cette page contiendra un formulaire d'inscription d'un utilisateur simple.

> Vous inclurez dans ce formulaire une confirmation de mot de passe. Il y aura donc 2 champs pour le mot de passe : un champ "Mot de passe", et un champ "Confirmation de mot de passe". Les 2 champs devront être identiques pour que le formulaire soit valide.

## Liste d'utilisateurs

Cette page contiendra la liste de tous les utilisateurs.

Un lien de modification sera disponible pour chaque utilisateur, dans la liste.

Un lien de création d'un nouvel utilisateur sera également présent dans cette page.

> ### Pour chaque utilisateur, un lien "Désactiver" ou "Activer" sera disponible dans la liste, suivant le statut de l'utilisateur. Gardez à l'esprit qu'activer ou désactiver un utilisateur doit également être protégé par authentification. Si l'utilisateur est actif, alors vous afficherez un lien pour le désactiver. Sinon, vous afficherez un lien pour l'activer

## Création d'un nouvel utilisateur

Depuis l'interface d'administration, vous pourrez créer un utilisateur.

> Rappel : le lien de création sera accessible depuis la liste des utilisateurs

Le formulaire de création devra donc contenir, en plus du login et du mot de passe, une case à cocher "Actif", et une liste déroulante pour le rôle à attribuer à l'utilisateur ('Utilisateur' ou 'Administrateur').

## Modification d'un utilisateur

Depuis la liste des utilisateurs, un lien "Modifier" sera présent.

Le formulaire de modification sera identique au formulaire de création.

Les valeurs seront pré-remplies avec les informations de l'utilisateur.

## Liste d'emails dans la newsletter

Un utilisateur administrateur, authentifié, pourra également accéder à la liste des emails enregistrés dans la newsletter.

Il sera uniquement possible, depuis la liste, de supprimer un email avec un bouton associé.
