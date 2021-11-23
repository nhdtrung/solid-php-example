<?php
/**
 * Objects must be replaceable by instances of their subtypes without altering the correct functioning of our system.
 *
 * Imagine managing two types of coffee machine. 
 * According to the user plan, we will use a basic or a premium coffee machine, 
 * The only difference is that the premium machine makes a good vanilla coffee plus than the basic machine. 
 * The main program behavior must be the same for both machines.
 */

interface CoffeeMachineInterface {
    public function brewCoffee($selection);
}


class BasicCoffeeMachine implements CoffeeMachineInterface {
  
    public function brewCoffee($selection) {
        switch ($selection) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            default:
                throw new CoffeeException('Selection not supported');
        }
    }
    
    protected function brewEspresso() {
        // Brew an espresso...
    }
}


class PremiumCoffeeMachine extends BasicCoffeeMachine {
  
    public function brewCoffee($selection) {
        switch ($selection) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            case 'VANILLA':
                return $this->brewVanillaCoffee();
            default:
                throw new CoffeeException('Selection not supported');
        }
    }
    
    protected function brewVanillaCoffee() {
        // Brew a vanilla coffee...
    }
}


function getCoffeeMachine(User $user) {
    switch ($user->getPlan()) {
        case 'PREMIUM':
            return new PremiumCoffeeMachine();
        case 'BASIC':
        default:
            return new BasicCoffeeMachine();
    }
}


function prepareCoffee(User $user, $selection) {
    $coffeeMachine = getCoffeeMachine($user);
    return $coffeeMachine->brewCoffee($selection);
}

