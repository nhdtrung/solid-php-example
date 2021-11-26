## SOLID stands for:

**S**: Single-responsibility principle

**O**: Open-closed principle
 
**L**: Liskov substitution principle
 
**I**: Interface segregation principle
 
**D**: Dependency Inversion Principle

### Single Responsibility Principle ([Example](./1-single-responsibility-principle.php))
> A class should have one and only one reason to change, meaning that a class should have only one job.

### Open Closed Principle ([Example](./2-open-closed-principle.php))
This principle is about **class design and feature extensions**.
> A class or object should be open for extension, but closed for modification.

### Liskov Substitution Principle ([Example](./3-liskov-substitution-principle.php))
This principle is about **subtyping and inheritance**
> Objects must be replaceable by instances of their subtypes without altering the correct functioning of our system.

### Interface Segregation Principle ([Example](./4-interface-segregation-principle.php))
This principle is about **business logic to clients communication**.
> Many client-specific interfaces are better than one general-purpose interface.

### Dependency Inversion Principle ([Example](./5-dependency-inversion-principle.php))
This principle wires up all **other four principles in a single circle**.
> Entities must depend on abstractions not on concretions. 
> It states that the high level module must not depend on the low level module, but they should depend on abstractions.
