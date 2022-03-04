<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_term', function (Blueprint $table) {
            $table->id();
            $table->text('tern_name');
            $table->date('contract_term_from');
            $table->date('contract_term_to');
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
        Schema::dropIfExists('contract_term');
    }
}
