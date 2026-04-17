<?php
class Controller_Contacts extends Controller {
    function action_index() {
        // Указываем, какой файл контента вставить в template_view.php
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}