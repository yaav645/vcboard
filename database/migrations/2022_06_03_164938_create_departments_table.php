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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            /*            $table->unsignedBigInteger('admin_id');
                        $table->unsignedBigInteger('company_id');*/
            $table->softDeletes();
            $table->timestamps();

            /*            $table->index('admin_id', 'department_user_idx');
                        $table->foreign('admin_id', 'department_user_fk')
                            ->on('users')
                            ->references('id');

                        $table->index('company_id', 'department_company_idx');
                        $table->foreign('company_id', 'department_company_fk')
                            ->on('companies')
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
        Schema::dropIfExists('departments');
    }
};
