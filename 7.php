<?php
/**
 * 7. Дополните класс Worker из предыдущей задачи private
 * методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
 * Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный -
 * он не должен меняться). */

class Worker
{

    private $age;


    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }


    private function checkAge($age)
    {
        if ($age < 100) {
            return true;
        } else {
            return true;
        }
    }


}

$user1 = new Worker();
$user1->setAge(25);
echo $user1->getAge() . '</br>';


$user2 = new Worker();
$user2->setAge(26);
echo $user2->getAge();

