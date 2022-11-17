<?php

require_once "models/get.model.php";
require_once "models/post.model.php";
require_once "models/connection.php";

class PostController
{
    /**
     * Peticion POST para crear datos
     */

    static public function postData($table, $data)
    {

        $response = PostModel::postData($table, $data);
        echo "\$response ";
        print_r($response);
        echo "\n";
        return;
    }
}
