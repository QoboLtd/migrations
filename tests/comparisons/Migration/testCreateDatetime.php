<?php
use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'null' => false,
            'default' => null,
            'limit' => 255,
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false,
            'default' => null,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
            'default' => null,
        ]);
        $table->create();
    }
}
