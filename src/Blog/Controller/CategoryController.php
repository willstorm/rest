<?php
namespace Blog\Controller;

use Silex\Application;

class CategoryController
{
    public function listAction(Application $app)
    {
        return $app->json();
    }
}