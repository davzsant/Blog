<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * User Controller
 *
 */
class UserController extends AppController
{
    public function show(){
        $id = $this->request->getParam("id");
        $connection = ConnectionManager::get("default");
        $user =  $connection->execute("SELECT * FROM users WHERE id = :id",["id"=> $id])->fetch('obj');
        $this->set(compact("user"));
        return $this->render('show','master');

    }
}
