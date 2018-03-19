<?php
/**
 * 8. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
 * Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
 * Сделайте также public методы getName, getSalary.
 */

class Worker
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
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

}

$worker = new Worker('Iren', 12500);
echo $worker->getName() . '<br/>';
echo $worker->getSalary();

