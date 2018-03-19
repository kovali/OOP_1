<?php

/**
 * 14. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 * Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
 */
class Worker
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

class Driver extends Worker
{
    private $experience;
    private $categoryA;
    private $categoryB;
    private $categoryC;

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getCategoryA()
    {
        return $this->categoryA;
    }

    public function setCategoryA($categoryA)
    {
        $this->categoryA = $categoryA;
    }

    public function getCategoryB()
    {
        return $this->categoryB;
    }

    public function setCategoryB($categoryB)
    {
        $this->categoryB = $categoryB;
    }

    public function getCategoryC()
    {
        return $this->categoryC;
    }

    public function setCategoryC($categoryC)
    {
        $this->categoryC = $categoryC;
    }
}

$driver = new Driver();
$driver->setExperience(2);
$driver->setCategoryA(3);
$driver->setCategoryB(4);
$driver->setCategoryC(7);


echo $driver->getExperience() . '<br/>';
echo $driver->getCategoryA() . '<br/>';
echo $driver->getCategoryB() . '<br/>';
echo $driver->getCategoryC() . '<br/>';
