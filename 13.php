<?php
/**
 * 13. Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля
 * стипендия, курс, а также геттеры и сеттеры для них.
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

class Student extends User
{
    private $course;
    private $grand;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getGrand()
    {
        return $this->grand;
    }

    public function setGrand($grand)
    {
        $this->grand = $grand;
    }
}

$student = new Student();
$student->setName('Mike');
$student->setAge(20);
$student->setCourse(3);
$student->setGrand(1200);

echo $student->getName() . '<br/>';
echo $student->getAge() . '<br/>';
echo $student->getCourse() . '<br/>';
echo $student->getGrand();



