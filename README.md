# ✅ Moodle Simplifié – Cahier des Charges (WE4A)

## I. Technologies à utiliser

- [ ] Symfony 7
- [ ] Apache + MySQL (XAMPP ou équivalent)
- [ ] Aucune autre librairie que :
  - [ ] Bootstrap
  - [ ] JQuery
- [ ] Migrations Symfony fonctionnelles
- [ ] Fichier SQL d’exemple généré via phpMyAdmin

---

## II. Rôles à gérer

### Admin
- [ ] Accès zone admin
- [ ] Création UE + assignation
- [ ] Création comptes (rôles + mot de passe)
- [ ] Redirection prof/admin selon rôle
- [ ] Pas d’accès UE sauf si aussi prof

### Étudiant
- [ ] Page accueil = choix UE
- [ ] Voir messages texte + fichiers
- [ ] Télécharger fichiers

### Professeur
- [ ] Page accueil = choix UE
- [ ] Voir/Créer/Modifier/Supprimer posts
- [ ] Interface formulaire séparée (minimum)
- [ ] (Nice) Interface AJAX dynamique

---

## III. Pages indispensables

### Login
- [ ] Formulaire de login
- [ ] Redirection obligatoire si non connecté
- [ ] JS : Montrer/cacher mot de passe
- [ ] JS : Refuser envoi si champ vide
- [ ] (Nice) Statistiques, UI enrichie

### Admin – Catalogue
- [ ] Onglets Users / UEs
- [ ] Bouton Créer User / UE
- [ ] Modifier / Supprimer chaque entrée
- [ ] JS : Changement d’onglet
- [ ] JS+AJAX : Suppression + confirmation popup

### Création/Modification User
- [ ] Nom, prénom, email, rôle, mot de passe, UE assignées
- [ ] Sélection dynamique UE (JS)
- [ ] (Nice) Création UE rapide sans quitter

### Création/Modification UE
- [ ] Code, intitulé, image
- [ ] (Nice) Gestion utilisateurs associés (recherche AJAX)

### Choix UE (étudiant/prof)
- [ ] Affichage imagé des UE
- [ ] Fil d’actualité (activité récente)
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
