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
        Schema::create('tbl_admission', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->varchar('fname');
            $table->varchar('lname');
            $table->enum('entry_classification',
            [
                'Basic Education',
                'College',
                'Graduate School',
                'Transferee'
            ]);
            $table->varchar('email');
            $table->varchar('phone');
            $table->varchar('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admission');
    }
};
