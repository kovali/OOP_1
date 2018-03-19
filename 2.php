<?php

/**
 * 2. Создайте объект этого класса, затем установите поля в следующие значения
 * (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
 * Создайте второй объект этого класса,
 * установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
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

echo $worker1->name . ' -';
echo $worker1->age . '-';
echo $worker1->salary . '<br/>';

$Worker2 = new Worker();
$Worker2->name = 'Vasily';
$Worker2->age = 26;
$Worker2->salary = 2000;

echo $Worker2->name . ' -';
echo $Worker2->age . '-';
echo $Worker2->salary;
