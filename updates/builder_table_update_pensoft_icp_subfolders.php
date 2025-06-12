<?php namespace Pensoft\Icp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftIcpSubfolders extends Migration
{
    public function up()
    {
        Schema::table('pensoft_icp_subfolders', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pensoft_icp_subfolders', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
