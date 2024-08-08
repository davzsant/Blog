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
    public function show($id){
        $connection = ConnectionManager::get("default");
        $user =  $connection->
    }
}
