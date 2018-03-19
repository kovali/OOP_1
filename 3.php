<?php

/**
 * 3. Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
 */
class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker();
$worker1->name = 'Ivan';
$worker1->age = 25;
$worker1->salary = 1000;

$Worker2 = new Worker();
$Worker2->name = 'Vasily';
$Worker2->age = 26;
$Worker2->salary = 2000;

echo $worker1->salary + $Worker2->salary . '</br>';
echo $worker1->age + $Worker2->age;
