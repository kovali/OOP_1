<?php
/**
 *10. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
 * public методы setName, getName, setAge, getAge.
 */

class User
{
    protected $name;
    protected $age;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}
