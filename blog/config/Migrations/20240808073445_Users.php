<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('userName','string',[
            'default'=> null,
            'null' => false,
            'limit' => 30
        ]);
        $table->addColumn('email','string',[
            'default'=> null,
            'null' => false,
            'limit' => 80
        ]);
        $table->addColumn('password','string',[
            'default'=> null,
            'null' => false,
            'limit' => 18
        ]);
        $table->addIndex('email',options: ['unique'=> true]);
        $table->create();
    }
}
