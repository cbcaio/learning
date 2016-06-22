# SOLID Principles 

1. Single Responsibility
2. Open-Closed
3. Liskov Substitution
4. Interface Segregation
5. Dependency Inversion

### Single Responsibility (SRP)

  - A class should have one, and only one, reason to change.

beforePrinciple example problems:

1. Why would the SalesReporter have any interest in the authenticated user? That is application logic and does not 
belong the SalesReporter class.
2. Why SalesReporter has the responsibility to query the database? Or , why it needs to understand what our persistent 
layer if or how to fetch data? 
3. Why the SalesReporter is responsible for formatting the output? Wouldn't the SalesReporter class need change if 
the formatting needs are changed? So, if the formatting needs change and the persistent layer also change, there would 
be two reasons to modify the SalesReporter class, which goes against the principle.

Solution:

1. Extract the authentication logic and put it somewhere else, like in a middleware, a controller, etc.
2. The solution here was to create a specialized class responsible to retrieve the data from the database 
(SalesRepository) and inject it in the SalesReporter's constructor.
3. The responsibility of formatting the output was passed to an implementation of the SalesOutputInterface, the 
desired output was implemented in the HtmlOutput class, so if a new kind of formatting is needed the SalesReporter 
doesn't need to change.

### Open-Closed (OCP)

  - Entities should be open for extension, but closed for modification. In other words, we need to change the 
  behavior without  modifying source code.
  
  - Solution: Separate extensible behavior behind an interface, and flip the dependencies.
  
In this example we have a Rectangle class, a Circle class and an AreaCalculator which is responsible for 
calculating the areas of an array of shapes (circles or rectangles). The problem is that the AreaCalculator was 
verifying the type of the shape passed as an argument and then identifying which formula was needed for that 
specific shape, like shown bellow:
  
```
if ($shape instanceof Rectangle)
   $area[] = $shape->width * $shape->heigth;
elseif (is_a($shape,'Circle')) // same as instanceof
   $area[] = $shape->radius * $shape->radius * pi();
```

So, applying the solution:

  1. Separating the extensible behavior behind an interface =  Shape interface was created with a method area defined
  2. flip the dependencies = implementing the interfaces on the classes Rectangle and 
  Circle, removing the old code and using the new implemented method

```
  $area[] = $shape->area();
```

### Liskov Substitution (LSP)

  - Derived class must be substitutable for their base classes.
  
  - Quick lists of ways do adhere the LSP: 
    1. Signature must match
    2. Preconditions can't be greater
    3. Post conditions at least equal to
    4. Exception types must match
  
This principle helps protect us against those situations where some kind of descendant exposes a behavior that is 
quite different than the original class. There are 2 examples for this principle here, the first one illustrates a 
situation where a function have two different behaviors, one in the parent class and another in the child class, 
which goes against the LSP. The second example illustrates a function with different outputs.  

- Notice: If you ever find yourself doing checks like "instance of" than not only are you likely breaking the 
Open-Close Principle, but also the Liskov Substitution Principle.

### Interface Segregation (ISP)

  - A client should not be forced to implement an interface that it doesn't use.
  
  A fat interface breaks the ISP, so what we do is break the fat interface into smaller interfaces like in the example.
Also, this principle may help us to adhere the OCP principle, like shown in the example with the ManageableInterface.

### Dependency Inversion (DIP)

  - Depend on abstractions, not on concretions.
  - End result: All of this is about decoupling code.
  
Inversion does not mean injection! Dependency injection just gives us a methodology to conform to the principle.
Dependency Inversion states that high level modules should not depend on low level modules, instead they should 
depend on abstraction, both of them (high and low level modules).
   
    - High level code isn't as concerned with details.
    - Low level code is more concerned with details and specifics.

#### Thanks to : https://laracasts.com
