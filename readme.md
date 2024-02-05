# Exemples de menus de langues faciles avec processwire

toujours à destination des utilisateurs français de processwire pour qui il n'y a pas grand-chose sur le web...\
**partout j'ai considéré que la langue par défaut était le français mais bien sûr, c'est adaptable à n'importe quelle autre langue par défaut**

## menu page à page

**menu_langues_pageapage.php**\
Menu de langue qui va vers la même page dans la langue choisie

## menu vers la page d'accueil

**menu_langues_versaccueil.php**\
menu qui emmène systématiquement vers la home/page d'accueil dans la langue choisie

## menu sous forme de select

**menu_langues_select.php**\
très utile quand il commence à y avoir beaucoup de langues pour ne pas être embêté par le responsive...
fait page à page mais facile à transformer pour vers la home en utilisant la ligne commentée

## menu astuces

**menu_langues_astuces.php**\
dans le cas d'un site qui utilise des langues avec des alphabets, syllabaires ou caractères comme le russe, le japonais, le chinois, ça peut se gâter pour
- un visiteur pratiquant une de ces langues de trouver sa langue dont le nom est écrit en français, espagnol ou autre
- un visiteur français par exemple de retrouver le français quand tout le menu est écrit en chinois ou russe s'il a cliqué pour aller voir

### plusieurs solutions

**1** mettez le nom de la langue dans la langue en question dans le titre/title de chaque langue et ne remplissez pas les titres dans les autres langue

***seul "problème"***\
à vous de reconnaître la langue en question dans les onglets au-dessus de chaque champ

**2** jouer avec une fonction par exemple comme dans le fichier langues.astuces.php

***important***\
plus propre de mettre la fonction dans un fichier _func.php que vous includez dans le fichier _init.php ou, si elle est célibataire, juste après le namespace en haut du fichier _main.php\
en plus, elle pourra servir ailleurs que juste dans le menu de langue

***seul petit "problème"***\
Moins dynamique, il vous faudra enrichir la function si vous ajoutez de nouvelles langues à moins de faire un énorme switch avec toutes les langues qu'un client peut avoir envie d'ajouter sachant qu'un switch n'envoie pas d'erreur si un iso n'existe pas sur le site, il se contente de continuer sa route jusqu'à tomber sur le bon