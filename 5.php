<?php

/**
 * 5. Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
 */
class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$user1 = new Worker();
$user1->setName('Ivan');
echo $user1->getName() . ' - ';
$user1->setAge(25);
echo $user1->getAge() . ' - ';
$user1->setSalary(1000);
echo $user1->getSalary() . '<br/>';

$user2 = new Worker();
$user2->setName('Vasily');
echo $user2->getName() . ' - ';

$user2->setAge(26);
echo $user2->getAge() . ' - ';

$user2->setSalary(2000);
echo $user2->getSalary() . '<br/>';