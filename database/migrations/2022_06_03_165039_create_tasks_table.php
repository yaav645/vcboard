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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            /*            $table->unsignedBigInteger('owner_id');*/
            $table->date('deadline');
            $table->smallInteger('deadline_shift')->nullable();
            $table->softDeletes();
            $table->timestamps();

            /*            $table->index('owner_id', 'task_user_idx');
                        $table->foreign('owner_id', 'task_user_fk')
                            ->on('users')
                            ->references('id');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
