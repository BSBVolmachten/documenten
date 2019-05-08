<?php namespace BsbVolmachten\Documenten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenDocumentenMain extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_documenten_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_documenten_main');
    }
}
