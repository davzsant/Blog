<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function index(){

        $connection = ConnectionManager::get("default");
        $users = $connection->execute("SELECT * FROM  users ORDER BY id DESC")->fetchAll('obj');
        $this->set(compact('users'));
        return $this->render('index','master');
    }
}
