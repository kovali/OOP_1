<?php

/**
 * 11. Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
 * а также методы public getSalary и setSalary.
 */
class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}

class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$worker = new Worker();
$worker->setName('Mike');
$worker->setAge(19);
$worker->setSalary(1000);


echo $worker->getName() . '<br/>';
echo $worker->getAge() . '<br/>';
echo $worker->getSalary();
