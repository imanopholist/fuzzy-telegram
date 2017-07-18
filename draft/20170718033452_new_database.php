<?php

use Phinx\Migration\AbstractMigration;

class NewDatabase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
   /* public function change()
    {

    }*/
    public function up()
    {
        $table = $this->table('my_quotes', array('id'=>false, 'primary_key'=>array('quote_id')));
        $table->addColumn('quote_id', 'string', array('limit'=>32))
              ->addColumn('created', 'datetime')
              ->addColumn('category', 'string', array('limit'=>32))
              ->addColumn('json_blurb', 'text')
              ->create();
    }
    
    public function down()
    {
        $this->dropTable('my_quotes');

    }
}
