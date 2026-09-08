<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned(); // Auto incrementing primary key
            $table->string('name', 124); // Name column
            $table->string('group_name', 124)->nullable(); // Group name, nullable
            $table->string('guard_name', 255); // Guard name column
            $table->timestamp('created_at')->nullable(); // Timestamp for creation
            $table->timestamp('updated_at')->nullable(); // Timestamp for update

            // Unique constraint on name and guard_name
            $table->unique(['name', 'guard_name'], 'permissions_name_guard_name_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
