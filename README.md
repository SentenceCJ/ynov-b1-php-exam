## EXAM TP

-   Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?

Les deux méthodes utilisables sont dans un formulaire $_GET et $_POST

-   Quelle est la différence entre include, include_once, require et require_once ?

Include sert a avertir en cas de problème sans empêcher l’exécutions de la page.

Require en revanche empeche l’execution de la page en cas de probleme

Le suffixe once sert a limiter l’inclusion a une seule par page, pour un include_once renverra un warning , tandis qu’un require_once , bloquera l’execution et retournera une erreur

-   Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?

Nous devons utiliser la fonction « session_start »

-   Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO ?

Une DSN ( Data Source Name) est une structure de donnée utilisée pour décrire une connexion a une source  de donné. Dans le cadre de PDO, il sert a donnée le nom de l’hote sur lequel le serveur de base de données se situe, le numéro de port du serveur, et le dbname ( nom de la base de données)

-   Quelle est la différence entre une requête préparée et une requête non préparée ?

Une requête non préparée exécute une requête SQL en appelant une seule fonction, et retourne le résultat en tant qu’objet tandis qu’une requête préparée prepare une requête à l’exécution et retourne un objet mais nécessite que l’on l’appelle

-   Quelle est la différence entre la méthode GET et la méthode POST ?

La méthode GET permet l’envoie d’une quantité limité de donnée car les données sont envoyés dans l’en tête. La méthode POST , une grande quantité de données peut être envoyée car les données sont envoyées dans le corps