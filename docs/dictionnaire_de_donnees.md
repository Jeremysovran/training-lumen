# Dictionnaire de données

## Entité User (`user`)

|Champ|Type|Spécificités|Description|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant|
|name|VARCHAR(64)|NOT NULL|Le nom de l'utilisateur|
|email|VARCHAR(128)|NOT NULL, UNIQUE|L'email|
|pictureprofile|VARCHAR(255)|NOT NULL, DEFAULT user.jpg|Photo profil|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du user|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du user|


## Entité Post (`post`)

|Champ|Type|Spécificités|Description|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant|
|text|TEXT|NOT NULL|texte du post|
|picture|VARCHAR(255)|NULL|Photo affiché à l'intérieur du post|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du user|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du user|


## Entité Comment(`comment`)

|Champ|Type|Spécificités|Description|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant|
|text|TEXT|NOT NULL|Texte du commentaire|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du user|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du user|

## Entité Photo (`photo)

|Champ|Type|Spécificités|Description|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant|
|picture|VARCHAR(255)|NOT NULL|album photo provenant du feed|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du user|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du user|