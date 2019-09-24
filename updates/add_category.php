<?php namespace BsbVolmachten\Documenten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class addCategory extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->string('category', 255);
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
