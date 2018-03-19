<?php

/**
 * 9. Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
 */
class Worker
{
    private $name;
    private $salary;
    private $age;

    public function __construct($name, $salary, $age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    public function getAge()
    {
        return $this->age;
    }

}

$worker = new Worker('Dmitry', 1000, 25);
echo $worker->getName() . '<br/>';
echo $worker->getSalary() . '</br>';
echo $worker->getSalary() * $worker->getAge();
