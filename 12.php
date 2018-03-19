<?php

/**
 * 12. Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
 * Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000.
 * Найдите сумму зарплата Ивана и Васи.
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

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}

$worker = new Worker();
$worker->setName('Ivan'); //метод родителя
$worker->setAge(25); //метод родителя
$worker->setSalary(1000);


echo $worker->getName() . '<br/>'; //метод родителя
echo $worker->getAge() . '<br/>'; //метод родителя
echo $worker->getSalary() . '<br/>';

$worker2 = new Worker();
$worker2->setSalary(2000);
$worker2->setName('Vasily'); //метод родителя
$worker2->setAge(26); //метод родителя


echo $worker2->getName() . '<br/>'; //метод родителя
echo $worker2->getAge() . '<br/>'; //метод родителя
echo $worker2->getSalary() . '<br/>';

echo $worker->getSalary() + $worker2->getSalary();//summ salary

