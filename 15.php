<?php
/**
15. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close.
 * Каждый метод принимает массив атрибутов.
 *
 * 16. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea после отправки.
    То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
 * Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново.
 * Этого следует избегать.
 */

class Form{
    public function open($action='',$method='get'){
        return '<form method="'. $method .'" action="'.$action.'"">';
    }
    public function input($name,$type="text",$value=''){
        return '<input name="' . $name . '" type="'.$type.'" value="'.$value.'"">';
    }

    public function password($name){
        return $this->input($name,$type='password',$value=null);
    }
    public function submit($value){
        return '<input type="submit" value="' . $value . '"">';
    }
    public function close(){
        return '</form>';
    }
}
$form = new SmartForm();
echo $form->open();
echo $form->input('login');
echo $form->password('password');
echo $form->submit('Отправить');
echo $form->close();


class SmartForm extends Form
{
    protected $params=[];

    public function __construct()
    {
        $this->params = $_REQUEST;
    }
    public function input($name,$type="text",$value=''){
        if(isset($this->params[$name])){
            $value=$this->params[$name];
        }
        return parent::input($name,$type,$value);
    }

    public function _toString(){
        return json_encode($this->params);
    }
}
