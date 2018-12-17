	#### Théorie

	* 1 point pour donner les noms de fichiers et les lignes de ces fichiers dans lesquelles un mécanisme d'inversion de dépendance est à l'oeuvre.
	* 2 points pour un diagramme de classe incluant les classes et interfaces que vous avez créé ainsi que celles dont vous dépendez
	* 2 points pour un court argumentaire sur le thème "héritage vs composition", avantage et inconvénient de chaque (un travail de recherche court est donc à effectuer, "Composition over inheritance" en anglais). Le texte fourni doit faire 500 mots.



	## Short argument on the theme "inheritance vs composition"



	#### What is inheritance ?
	
	Inheritance is one of the main principles of object-oriented programming (OOP), and PHP implements it in its object model. This principle will affect how many classes relate to each other.

	For example, when you extend a class, the girl class inherits all public and protected methods from the class
	Inheritance is very useful for defining and abstracting some features common to several classes, while allowing the implementation of additional features in the child classes, without having to reimplement withi



	#### What is composition ?

	Composition is one of the fundamental concepts in object-oriented programming. It describes a class that references one or more objects of other classes in instance variables. This allows you to model a has-a association between objects.
	
	In this design pattern an object creates another object. Aggregation occurs when an object is composed of multiple objects. Composition is effectively an ownership relationship, while aggregation is a “contains” relationship. Composition allows reuse of code without inheriting the parent class.

	You can find such relationships quite regularly in the real world. A car, for example, has an engine and modern coffee machines often have an integrated grinder and a brewing unit.



	# Relationships between your classes

	Reusing code from one class to another class indicates that these classes have some common methods and properties. In this case, reusing them will help you avoid code duplication. There are two ways for one class to connect to another class and we will use the diagram below to help us better understand these two relationships.


	# Implementation of an IS-A relationship with inheritance

	Inheritance is a design model that implements an "IS-A" relationship between classes. Here there is a parent-child relationship in which a parent class with its own methods and properties, and then a child class created that can use the code of the parent class.



	#### Inheritance vs Compostion  

	Composition over inheritance in object-oriented programming is the principle that classes should achieve polymorphic behavior and code reuse by their composition rather than inheritance from a base or parent class. This is an often-stated principle of OOP, such as in the influential book Design Patterns.

	In addition, the composition often makes it possible to simplify the relations between the objects, making the code less interdependent and therefore more versatile: in two words, more reusable.
	
	Sometimes inheritance is necessary, especially when you create a class of the same family, or if one class simply wants to use the features and properties of another class, then the inheritance will be useful.


	Key Differences Between Heritage and Composition

	Composition - Has-a relationship between objects.
	Inheritance - Is a relationship between classes.

	Composition - The composition object contains a reference to the composition classes, so the relationship is loosely linked.
	Inheritance - The object of the daughter class carries the definition of the mother class in itself and therefore closely related.

	Composition - Used as an addictive injection
	Inheritance - Used in polymorphism

	Composition - Objects can be composed within multiple classes.
	Inheritance - A class can inherit only one class.


	The main difference between composition and heritage is that the composition allows reuse of code without a class key, but for inheritance you must inherit from the mother class for any code or feature reuse. Another difference is that using the composition you can reuse the code for a final class is not extensible, but inheritance can not reuse the code in them. Also using Composition, you can reuse the code of many classes because they are declared as a single member, but with Inheritance, you can reuse the code of a single class.

	Conclusion

	That's all about the difference between inheritance and composition. You can see that even if they have the same goal of helping to reuse a tried-and-tested goal, their choice raises different challenges. The composition offers a better way to reuse the code and at the same time protects the class you reuse from any client, but Heritage does not offer that guarantee. 