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
        Schema::create('veterinarycares', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('pet_name');
            $table->string('breed');
            $table->string('age');
            $table->string('service_name');
            $table->date('appointment_date');
           
            $table->text('special_requests')->nullable();
            
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
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
        Schema::dropIfExists('veterinarycares');
    }
};
