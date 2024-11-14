<?php
namespace APP\controller;

class redirectController
{

    public function redirect($page)
    {
        if ($page == "index") {
            header("Location: ../../index.php");
        } else if ($page) {
            header("Location: ../../src/views/Pages/" . $page . ".php");
        }

    }


}