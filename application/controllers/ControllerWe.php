<?php

class ControllerWe extends Controller { 

    // Конструктор должен быть ВНУТРИ класса
    function __construct() {
        // Создаем модель и вьюху
        $this->model = new ModelWe();
        $this->view = new View();
    }

    function actionIndex() { 
        // 1. Получаем данные из модели
        $data = $this->model->get_data();

        // 2. Передаем $data третьим параметром, чтобы они отобразились в we_view.php
        $this->view->generate('we_view.php', 'template_view.php', $data); 
    } 
}

?>