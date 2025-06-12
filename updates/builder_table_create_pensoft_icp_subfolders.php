<?php namespace Pensoft\Icp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftIcpSubfolders extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('pensoft_icp_subfolders')) {
            Schema::create('pensoft_icp_subfolders', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->string('name');
                $table->integer('parent_id')->nullable();
                $table->integer('nest_left')->nullable();
                $table->integer('nest_right')->nullable();
                $table->integer('nest_depth')->nullable();
                $table->string('slug')->nullable();
                $table->integer('user_id')->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('pensoft_icp_subfolders')) {
            Schema::dropIfExists('pensoft_icp_subfolders');
        }
    }
}
