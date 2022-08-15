<?php
    require_once './CommonCrudController.php';

    $crudObj = new CommonCrudController();

    $formData = [];
    $formData['name']     = 'Md. towhid islam';
    $formData['email']    = 'towhidislam@gmail.com';
    $formData['password'] = 'abc@123';

    // $crudObj->create('admins_abc', $formData);
    // print_r($crudObj->resultDisplay());
    
    // $crudObj->update('admins', $formData, "name='Md. towhid' AND id=4");
    // print_r($crudObj->resultDisplay());

    // $crudObj->delete('admins', 2);
    // print_r($crudObj->resultDisplay());

    $crudObj->select('admins', " name, email");
    echo "<pre>";
    print_r($crudObj->resultDisplay());
    echo "</pre>";