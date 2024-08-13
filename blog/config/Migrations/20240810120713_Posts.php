<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Posts extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table("posts");
        $table->addColumn("title","string",[
            "default"=> null,
            "limit"=> 100,
            "null"=> false,
        ]);
        $table->addColumn("body","text",[
            "default"=> null,
            "null"=> false,
        ]);
        $table->addColumn("user_id","biginteger",[
            "default" => null,
            "null"=> true,
        ]);
        $table->addForeignKey("user_id","users","id",['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->create();
    }
}
