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
        Schema::create('department_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('department_id', 'department_user_department_idx');
            $table->index('user_id', 'department_user_user_idx');

            $table->foreign('department_id', 'department_user_department_fk')
                ->on('departments')
                ->references('id');
            $table->foreign('user_id', 'department_user_user_fk')
                ->on('users')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_users');
    }
};
