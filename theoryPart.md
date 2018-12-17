#### Théorie

* 1 point pour donner les noms de fichiers et les lignes de ces fichiers dans lesquelles un mécanisme d'inversion de dépendance est à l'oeuvre.
* 2 points pour un diagramme de classe incluant les classes et interfaces que vous avez créé ainsi que celles dont vous dépendez
* 2 points pour un court argumentaire sur le thème "héritage vs composition", avantage et inconvénient de chaque (un travail de recherche court est donc à effectuer, "Composition over inheritance" en anglais). Le texte fourni doit faire 500 mots.





#court argumentaire sur le thème "héritage vs composition" 



héritage : Qu'est-ce qu'est l'héritage ?

L'héritage est un des grands principes de la programmation orientée objet (POO), et PHP l'implémente dans son modèle objet. Ce principe va affecter la manière dont de nombreuses classes sont en relation les unes avec les autres.

Par exemple, lorsque vous étendez une classe, la classe fille hérite de toutes les méthodes publiques et protégées de la classe parente. Tant qu'une classe n'écrase pas ces méthodes, elles conservent leur fonctionnalité d'origine.

L'héritage est très utile pour définir et abstraire certaines fonctionnalités communes à plusieurs classes, tout en permettant la mise en place de fonctionnalités supplémentaires dans les classes enfants, sans avoir à réimplémenter en leur sein toutes les fonctionnalités communes.



composition : Qu'est-ce qu'est la composition ?



# Relations entre vos classes

La réutilisation du code d'une classe dans une autre classe indique que ces classes ont certaines méthodes et propriétés communes. Dans ce cas, les réutiliser vous aidera à éviter la duplication de code. Il existe deux manières pour une classe de se relier à une autre classe et nous utiliserons le diagramme ci-dessous pour nous aider à mieux comprendre ces deux relations.



Comparaison: Héritage vs Compostion  ?


Bien que les deux aient leurs avantages et leurs inconvénients, 
nous devons comprendre les meilleurs cas où nous implémentons 
des relations de classe avec composition et héritage. 

On doit utiliser la composition entre deux classes dans la majeure partie des cas si on ne peut pas sortir sans autre.

En outre, la composition permet souvent de simplifier les relations entre les objets, rendant le code moins interdépendant 
et donc plus versatile : en deux mots, plus réutilisable.

Si une classe veut simplement utiliser les fonctionnalités et les propriétés d'une autre classe, alors l'héritage sera utile.


