# Cahier des charges – Application de gestion d’un refuge animalier

## 1. Contexte général

Les refuges animaliers sont confrontés à diverses tâches de gestion :
- maintenance et publication de fiches d’animaux,
- gestion des demandes d’adoption,
- communication entre bénévoles et adoptants.

Ce projet vise à concevoir une application Web permettant au refuge « Les pattes heureuses » de :
- présenter le refuge au public,
- présenter ses animaux au public,
- gérer les contacts avec le public,
- gérer les demandes d’adoption,
- gérer et donc suivre les dossiers,
- notifier les utilisateurs par email.

---

## 2. Personas et scénarios

Pour vous aider, voici quelques idées non exhaustives de scénarios d’utilisation de l’application, drivées par trois personas.

### 🧑‍💼 Élise – Administratrice du refuge
**Âge :** 42 ans  
**Profil :** Fondatrice du refuge _Les Pattes Heureuses_.

#### 🧩 Scénario 1 - Suivi des dossiers :

Élise consulte chaque matin le tableau de bord du site pour voir les nouvelles demandes d’adoption éventuelles. Elle reçoit par ailleurs aussi des alertes par email, qu’elle peut configurer, si jamais elle n’allait pas régulièrement sur le tableau de bord.

Un matin, elle voit sur ce _dashboard_ la notification d’une demande d’adoption concernant _Moka_ un jeune caniche brun, émise par Sarah. Après voir pris connaissance de la demande, elle la trouve sérieuse et sur la fiche de Moka, elle change le statut d’adoption en « en cours ».

À ce moment, le site demande à Élise si elle souhaite notifier Sarah par email pour lui indiquer que sa demande a été prise en compte et qu’on va prochainement la rappeler, ce qu’Élise valide. Si elle ne la validait pas, elle conserverait sur le dashboard une alerte qu’une tâche non cloturée requiert de l’attention et une action.

La première prise de contact qui s’ensuivra (dépendante des modalités de contact laissées par Sarah), sera une occasion de fixer un rendez-vous pour une visite au refuge, et une occasion de compléter la fiche initiée par Sarah lors de sa demande via le site.

Deux jours plus tard, Élise n’a pas encore eu la chance de pouvoir joindre Sarah par téléphone. Elle voit apparaître sur son Dashboard une notification qu’elle a reçu un message via le formulaire de contact du site, de Sarah justement, qui lui propose des heures où elle est dispo pour la rappeler.

---

#### 🧩 Scénario 2 – Une urgence vétérinaire
Un soir, Élise reçoit un appel téléphonique d’un bénévole de garde au refuge : un chat recueilli récemment, _Tango_, doit être opéré. Elle appelle donc le vétérinaire.

Pendant sa convalescence, _Tango_ n’est plus disponible pour l’adoption. Élise veut indiquer rapidement dans la fiche de l’animal qu’il est « en soins » afin d’éviter que les visiteurs ne fassent une demande d’adoption pour le moment. L’affichage des boutons d’action pour adopter un animal est donc dépendante du statut de l’animal.

Depuis son tableau de bord, Élise modifie donc le statut de _Tango_ sur en « En soins ». Après validation, le changement se reflète instantanément sur le site public.

---

#### 🧩 Scénario 3 – Préparer le rapport mensuel
Chaque début de mois, Élise doit envoyer un rapport d’activité pour le mois précédent à la commune. Celle-ci participe au financement et à l’agrément octroyé pour l’exploitation du refuge, c’est donc très important pour Élise. Elle a besoin de communiquer des statistiques du mois écoulé indiquant :
- le nombre d’animaux accueillis,
- le nombre d’adoptions réussies,
- le nombre d’animaux encore au refuge.

Elle ouvre donc son tableau de bord et consulte la section dédiée aux statistiques. Elle choisit de voir les statistiques du mois dernier (le site permet de configurer diverses vues des stats), et en exporte un petit rapport PDF qui est téléchargé sur son disque dur. Elle pourra ainsi le communiquer à commune.

---

#### 🧩 Scénario 4 – Accueillir un nouveau bénévole
Élise accueille Chloé, une nouvelle bénévole.

Elle lui crée un compte _bénévole_ dans l’application, avec un accès restreint à la création et la mise à jour des fiches animaux.  Dans la fiche, elle encode les informations de contact de Chloé, ainsi que ses disponibilités horaires de manière structurée. Elle n’a pas encore le budget pour ça, mais à terme, elle prévoir aussi de pouvoir gérer les emplois du temps et le planning des bénévoles via le site. Elle a donc besoin de connaître les plages horaires disponibles pour chaque bénévole.

Après validation de la fiche de Chloé, celle-ci reçoit un email de bienvenue avec ses identifiants temporaires et une invitation à les modifier dans son profil.

---

### 🧑‍🔧 Thomas – Bénévole du refuge
**Âge :** 27 ans  
**Profil :** Étudiant vétérinaire, bénévole sur le terrain.  
**Objectif principal :** mettre à jour facilement les fiches d’animaux.

#### Scénario 1 - Création d’une fiche :
Thomas accueille un nouveau chat persan, Luna, amené par la famille de l’ancienne propriétaire du chat, récemment décédée.

Depuis son téléphone, il accède à l’interface d’administration et crée une nouvelle fiche pour Luna. En tant que bénévole, il lui est permis de préparer une fiche mais celle-ci devra encore être validée par Élise pour apparaître sur le site. Il encode les informations suivantes :

* > Nom : Luna
* > Espèce : Chat Persan (le site permet aux bénévoles d’ajouter de nouvelles races)
* > Sexe : Femelle
* > Pelage : Tigré
* > Âge : 5 ans
* > Vaccins : inconnus
* > Caractère : doux (un texte long est possible)
* > Statut : En attente d’adoption (choix par défaut)
* > Photo : luna.jpg

Après validation de la fiche par Thomas, Élise reçoit automatiquement une notification de la création de la fiche par email. C’est Élise qui in fine, aura la main sur la publication de la fiche. Thomas pourra encore proposer des changements sur la fiche par la suite, mais il faudra toujours qu’Élise publie les modifications pour qu’elles apparaissent publiquement.

---

#### 🧩 Scénario 2 – Mettre à jour une fiche après adoption

Sarah a décidé d’adopter _Moka_. Lors de son passage au refuge, elle a fait toute la procédure avec Thomas et est partie avec son nouveau compagnon. Après le départ de Sarah, Thomas ouvre la fiche de Moka et change le statut en « Adopté ». Il doit préciser alors que c’est Sarah qui a adopté Moka et noter le jour et l’heure où elle l’a emmené.

Le système envoie automatiquement une notification à Élise pour l’en informer. C’est une fois de plus Élise qui a les droits pour répercuter auprès du public les modifications préparées par Thomas. Après validation, sur le site public, Moka disparaît de la liste des animaux adoptables.

---

#### 🧩 Scénario 3 – Ajouter des notes internes

Avant la dernière visite de Sarah, lors de laquelle il a terminé la procédure d'adoption, Thomas a déjà rencontré une première fois Sarah. Pour rendre compte de cette visite, il a ajouté dans la fiche de _Moka_ une note interne :

> “Sarah semble très sérieuse. Elle dispose d’un grand jardin et connaît bien la race.”

Ces notes ne sont naturellement visibles que par l’équipe du refuge.

---

### 👩 Sarah – Adoptante potentielle
**Âge :** 31 ans  
**Profil :** Employée de bureau, souhaite adopter un animal calme.

#### Scénario : Trouver son futur animal de compagnie

Sarah cherche un chien et apprend l’existence du refuge grâce à une amie qui lui a parlé d’un chien qu’elle y a vu et qui pourrait lui convenir. Elle sait juste que c’est un caniche assez jeune, au pelage blanc.

Sur le site public du refuge, elle entame une recherche pour cet animal qu’on lui a renseigné en essayant à l’aide des critères qu’a évoqués son amie. Mais son amie s’est trompée et _Moka_ est en fait référencé avec un pelage brun. Heureusement, le site lui a proposé des animaux qui s’apparentaient à sa recherche, en plus des résultats corrects. Elle découvre donc _Moka_, lit sa fiche, et, convaincue, clique sur « Je voudrais planifier un rendez-vous pour rencontrer Moka ».

Elle remplit alors un court formulaire d’identification et est notifiée par email qu’une personne du refuge va prochainement reprendre contact avec elle.

Élise reçoit la demande dans son tableau de bord.

---

#### 🧩 Scénario 2 – Partager un profil d’animal

Sarah souhaite montrer _Moka_ à son compagnon. C’est important qu’il trouve également le chien à son goût.

Sur la fiche de Moka, Sarah découvre un lien « Partager ». Après l’avoir cliqué, elle voit une invitation à copier l’url de la fiche dans son presse-papier pour pouvoir l’envoyer dans un email ou un SMS à son compagnon.

---

#### 🧩 Scénario 3 – Contacter le refuge

Sarah est inquiéte. Ça fait trois jours qu’elle a marqué son intérêt pour _Moka_, mais elle n’a pas reçu pas le coup de fil annoncé. Elle décide donc de reprendre contact mais les heures d’ouverture du refuge sont celles où elle travaille. Elle prend donc quelques minutes le soir chez elle pour les contacter via le formulaire de contact et proposer des moments où elle peut répondre pour qu’on la rappelle et demander qu’on la recontacte par email si jamais elle n’était pas joignable.

## 3. Fonctionnalités principales

### 🐾 Animaux
- Création, édition, suppression d’une fiche (actions soumises à des autorisations diverses).
- Téléversement d’une photo.
- Gestion du statut adoptable.
- Affichage public des animaux disponibles.

### 📬 Demandes d’adoption
- Formulaire public lié à chaque animal.
- Enregistrement et validation des données.
- Notifications par email (admin et adoptant).
- Suivi du statut d’une demande.

### 👥 Utilisateurs
- Authentification.
- Rôles : administrateur et bénévole.
- Accès restreint selon les permissions.

---

## 4. Méthodologie : TDD et sprints

L’application doit être développée **progressivement**, selon une approche **Test Driven Development (TDD)** :
> **1.** Écrire un test qui échoue.  
> **2.** Écrire le code minimal pour le faire réussir.  
> **3.** Refactorer proprement le code et recommencer.

---

**Conseil méthodologique :**
- Utilisez l'outil projet de votre repo github et avancez par issues. Les issues doivent être très atomiques, ne concerner que des ensembles très réduits de fonctionnalité. N’hésitez pas à créer de nouveaux labels dans l'outil de gestion de projets et à grouper des issues par fonctionnalités grâce aux [milestones](https://docs.github.com/en/issues/using-labels-and-milestones-to-track-work/about-milestones)
- Commencez à résoudre vos issues par la rédaction de tests, ne codez rien qui ne soit pas une solution apportée à un test qui échoue. Lors de l’examen, une de mes premières vérification sera de lancer votre batterie de tests
- Ne progressez dans le repo que par branches mergées via des pull requests. Cela vous donne une occasion que vous devez absolument exploiter, de commenter l'évolution du projet. Passez du temps à commenter vos étapes dans ces merge de pull requests. Ça a autant de valeur que le code.  

