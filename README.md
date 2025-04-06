# Moodle Simplifié – Cahier des Charges (WE4A)

## I. Technologies à utiliser

- [ ] Symfony 7
- [x] Apache + MySQL (XAMPP ou équivalent)
- [x] Aucune autre librairie que :
  - [ ] Bootstrap
  - [x] JQuery
- [ ] Migrations Symfony fonctionnelles
- [ ] Fichier SQL d’exemple généré via phpMyAdmin

---

## II. Rôles à gérer

### Admin
- [x] Accès zone admin
- [x] Création comptes 
- [ ] Ajouter MDP
- [x] Pas de register
- [x] Gestion Prof / admin OU admin / étudiant PAS admin
- [ ] Page par défaut pour Prof-admin / admin / prof
- [ ] (NTH) : Admins peuvent modifier UE + notification pour le prof

### Étudiant
- [x] Page accueil = choix UE
- [ ] Voir messages texte 
- [x] Télécharger fichiers déposés par les profs

### Professeur
- [x] Page accueil = choix UE (pareil que étudiant)
- [ ] Voir/Créer/Modifier/Supprimer posts
- [ ] Interface formulaire séparée pour modifier contenu UE (minimum)
- [ ] (NTH) Interface AJAX dynamique

---

## III. Pages indispensables

### Login
- [x] Formulaire de login
- [ ] Redirection obligatoire si non connecté
- [ ] JS : Montrer/cacher mot de passe
- [x] JS : Refuser envoi si champ vide
- [ ] (NTH) Statistiques, UI enrichie

### Admin – Catalogue
- [ ] Page avec tous les users / UE (onglets JQuery)
- [ ] Mettre bouton ADD en haut du tableau
- [ ] Ajouter bouton effacer avec alert confirmation

### Création/Modification User
- [x] Nom, prénom, email, rôle, 
- [ ] Mot de passe
- [ ] UE assignées
- [ ] MDP par défaut pour une création
- [ ] Inteface assignation UE / user (VOIR SUJET)
- [ ] (Nice) Création UE rapide sans quitter

### Création/Modification UE
- [x] Code, intitulé, image
- [ ] Remplacer description par image
- [ ] (Nice) Gestion utilisateurs associés (recherche AJAX)

### Choix UE (étudiant/prof)
- [x] Affichage imagé des UE
- [x] Fil d’actualité (activité récente)
- [ ] (Nice) Bouton AJAX "charger plus"

### Page contenu UE
- [ ] Afficher tous les posts (texte + fichiers)
- [ ] Style différencié (CSS + icônes)
- [ ] Bouton création (prof seulement)
- [ ] Modifier / Supprimer (prof)
- [ ] JS+AJAX : suppression + confirmation

### Page création/modif post
- [ ] Boutons choix type (texte/fichier)
- [ ] JS : Affichage dynamique des formulaires

### Liste des inscrits
- [ ] Professeurs + étudiants séparés
- [ ] Nom, prénom, email (mailto)
- [ ] Page en lecture seule

### Gestion compte
- [ ] Modifier prénom, nom, mot de passe
- [ ] (Nice) Menu déroulant AJAX
- [ ] (Nice) Avatar / Téléphone / Infos en plus

---

## IV. Types de posts

### Texte
- [ ] Titre, date/heure, type, texte
- [ ] Catégories (Info, Important)
- [ ] Icône/type + CSS distinct
- [ ] Supprimer / Modifier (prof)
- [ ] JS+AJAX : suppression + confirmation
- [ ] (Nice) Édition inline AJAX

### Fichier
- [ ] Titre, description, date/heure
- [ ] Upload fichier (ZIP requis)
- [ ] Lien de téléchargement
- [ ] Supprimer / Modifier (prof)
- [ ] JS+AJAX : suppression + confirmation
- [ ] (Nice) Icône par type de fichier

---

## V. Nice to Have (bonus)

- [ ] Épingler / désépingler un post
- [ ] Admins modérateurs (alerte + accès UE)
- [ ] Contrôle ordre des posts (déplacement AJAX + BDD
