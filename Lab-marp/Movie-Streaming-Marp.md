---
marp: true
theme: movie
paginate: true
---

<!-- _class: cover -->

![OFPPT](images/logo-ofppt.png) ![Solicode](images/logo-solicode.png)

# MOVIE STREAMING PLATFORM

### Plateforme web de streaming de films

**Réalisé par :** Brahim Medkour

**Encadré par :** ES-Saraj Fouad

**Année de formation :** 2026

<!--
Bonjour à tous.
Je m'appelle Brahim Medkour.
Aujourd'hui, je vais présenter mon projet technique.
Le projet s'appelle Movie Streaming Platform.
C'est une plateforme pour regarder des films en ligne.
-->

---

<!-- _class: light -->

# PLAN DE PRÉSENTATION

Les différentes étapes de notre projet technique :

1. **Introduction** — Présentation du projet.
2. **Besoin** — Problématique et solution proposée.
3. **Analyse** — Étude des besoins et fonctionnalités.
4. **Conception** — Diagrammes et modèles du système.
5. **Réalisation** — Technologies et prototype.
6. **Conclusion** — Résultats du projet.

<!--
Voici le plan de ma présentation.
Je vais présenter le projet et ses besoins.
Ensuite, je vais expliquer l'analyse et la conception.
Après, je vais présenter les technologies utilisées.
Enfin, je vais terminer par la conclusion.
-->

---

<!-- _class: light -->

# INTRODUCTION

## Présentation du projet

Movie Streaming Platform est une application web qui permet aux visiteurs de rechercher, consulter et regarder des films directement en ligne.

## Objectif du projet

Développer une plateforme de streaming permettant la gestion et la publication des films.

## Les acteurs principaux

- **Administrateur :** gère les genres, valide les réalisateurs et les films, et contrôle les publications.
- **Director :** ajoute et gère ses films en choisissant un genre existant.
- **Visiteur :** recherche, consulte et regarde les films publiés.

<!--
Cette diapositive présente mon projet.
C'est une application web pour les films.
Les visiteurs peuvent chercher et regarder des films.
L'objectif est de gérer et publier les films.
Il y a trois acteurs : l'administrateur, le directeur et le visiteur.
-->

---

<!-- _class: light -->

# BESOIN DU PROJET

## Problématique

Comment faciliter la recherche et le visionnage des films tout en assurant une gestion organisée et une publication contrôlée des contenus ?

## Besoins principaux

**Administrateur :**
- Gérer les genres.
- Valider les réalisateurs et les films.
- Contrôler la publication des films.

**Director :**
- Ajouter et gérer ses films.
- Choisir un genre existant.

**Visiteur :**
- Rechercher et consulter les films.
- Choisir un film selon son genre.
- Regarder les films en ligne.

<!--
Cette diapositive présente les besoins du projet.
Le visiteur veut trouver des films facilement.
L'administrateur gère les genres et les publications.
Le directeur ajoute et gère ses films.
Chaque acteur a un rôle différent.
-->

---

<!-- _class: light -->

# ANALYSE DU PROJET

## Acteurs et fonctionnalités

**Administrateur :**
- Gérer les genres.
- Valider les réalisateurs et les films.
- Publier ou supprimer un film publié.

**Director :**
- Ajouter un film et choisir un genre.
- Modifier ou supprimer ses films non publiés.

**Visiteur :**
- Rechercher et consulter les films et les genres.
- Regarder les films publiés en ligne.

<!--
Dans cette partie, je présente les fonctionnalités.
L'administrateur valide les réalisateurs et les films.
Le directeur ajoute et modifie ses films.
Le visiteur recherche et regarde les films publiés.
-->

---

<!-- _class: light -->

# CONCEPTION DU PROJET

## Diagrammes et modèles

- **Diagramme de cas d'utilisation :** présente les fonctionnalités accessibles à chaque acteur.
- **Diagramme de classes :** décrit les classes et leurs relations.
- **Diagramme de séquence :** présente les étapes d'une interaction.
- **MLD :** représente l'organisation des données dans la base MySQL.

<!--
La conception permet de préparer le projet.
Le diagramme de cas d'utilisation montre les actions des acteurs.
Le diagramme de classes présente les classes et leurs relations.
Le diagramme de séquence montre les étapes d'une action.
Le MLD présente l'organisation des données.
-->

---

<!-- _class: content -->

# Réalisation

## Stack Technique

### Backend

- ⚙️ **Laravel 13** - Framework PHP moderne
- 🗄️ **MySQL 8** - Base de données relationnelle
- 🔐 **Laravel Sanctum** - Authentification API sécurisée
- 📦 **Eloquent ORM** - Gestion élégante des données

### Frontend

- ⚡ **Alpine.js** - Framework JavaScript léger et réactif
- 🎨 **Tailwind CSS** - Framework CSS utility-first
- 🖼️ **Blade Templates** - Moteur de templates Laravel

<!--
Maintenant, je présente les technologies utilisées.
Le Backend gère les données et les fonctionnalités.
Laravel est le framework PHP utilisé.
MySQL stocke les données.
Le Frontend permet de créer les pages du site.
Alpine.js et Tailwind CSS aident à créer l'interface.
Blade permet d'afficher les pages.
-->

---

<!-- _class: dark -->

# CONCLUSION

## Bilan du projet

Ce projet nous a permis de développer une plateforme web de streaming pour faciliter la gestion, la publication et le visionnage des films en ligne.

## Résultats obtenus

- Gestion organisée des genres et des films.
- Validation et publication contrôlées.
- Recherche et visionnage des films en ligne.

## Perspectives

- Améliorer l'expérience utilisateur.
- Ajouter de nouvelles fonctionnalités.
- Optimiser les performances de la plateforme.

# MERCI POUR VOTRE ATTENTION !

<!--
Pour conclure, mon projet permet de gérer et regarder des films en ligne.
Il facilite la recherche et la publication des films.
Dans le futur, je peux ajouter de nouvelles fonctionnalités.
Je vous remercie pour votre attention.
Avez-vous des questions ?
-->
