<?php

if (!empty($_GET['id']) && !empty(checkExistServices()->id)) {
    deleteService();
}
header('Location: ' . $router->generate('listServices'));
die;
