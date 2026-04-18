<?php
class ControllerContacts extends Controller {
    function actionIndex() {
        // Указываем, какой файл контента вставить в template_view.php
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}