<?php

require_once "connection.php";

class PostModel
{
    /**
     * Peticion POST para crear datos de forma dinamica
     */

    static public function postData($table, $data)
    {

        echo "\$table ";
        print_r($table);
        echo "\n";
        echo "\$data ";
        print_r($data);
        echo "\n";

        $sql = "INSERT INTO $table(`title_course`, `description_course`, `id_instructor_course`, `image_course`, `price_course`, `date_created_course`) VALUES (`:title_course`, `:description_course`, `:id_instructor_course`, `:image_course`, `:price_course`, `:date_created_course`)";
    }
}
