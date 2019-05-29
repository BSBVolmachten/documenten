<?php namespace Bsbvolmachten\Documenten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenDocumentenMain3 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_documenten_main', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}