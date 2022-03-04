<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminClassMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_class_menu', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('admin_class');
            $table->foreignId('menu_id')->constrained();
            $table->boolean('is_visible');
            $table->foreignId('created_by')->nullable()->constrained('admins');
            $table->timestamp('created_at')->nullable();
            $table->foreignId('updated_by')->nullable()->constrained('admins');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_class_menu');
    }
}
