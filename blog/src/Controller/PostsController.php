<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Posts Controller
 *
 */
class PostsController extends AppController
{
    public function index()
    {
        $connection = ConnectionManager::get("default");
        $posts = $connection->execute("SELECT *FROM posts ORDER BY RAND() LIMIT 10")->fetchAll('obj');
        $this->set(compact("posts"));
        return $this->render("index",'master');
    }
}
