<?php namespace BsbVolmachten\Documenten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenDocumentenMain extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->boolean('fileswitch');
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->dropColumn('fileswitch');
        });
    }
}
