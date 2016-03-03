<?php
namespace News\Controller;
use Silex\Application;

class CategoryController
{
    public function listAction(Application $app)
    {
        return $app->json(array(
            'test' => 1
        ));
    }
}