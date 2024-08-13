<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Post Controller
 *
 */
class PostController extends AppController
{
    public function show()
    {
        $id = $this->request->getParam("id");
        $connection = ConnectionManager::get("default");
        $post =  $connection->execute("SELECT * FROM posts WHERE id = :id",["id"=> $id])->fetch('obj');
        $this->set(compact("post"));
        return $this->render('show','master');
    }
}
