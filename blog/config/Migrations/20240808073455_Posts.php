<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Posts extends AbstractMigration
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
        $table = $this->table("posts");
        $table->drop();
        $table = $this->table("posts");
        $table->addColumn("title","string",[
            "default"=> null,
            "null" => false,
            'limit' => 100
        ]);
        $table->addColumn("body","text",[
            "default"=> null,
            "null" => false,
            "limit"=> 500
        ]);
        $table->addColumn("user_id",'integer',[
            'null'=> true,
            ])->addForeignKey('user_id','users','id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION'])->save();
        $table->create();

    }
}
