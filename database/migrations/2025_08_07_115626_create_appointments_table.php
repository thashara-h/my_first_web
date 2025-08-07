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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('pet_name');
            $table->string('breed');
            $table->string('age');
            $table->enum('service_type', ['spa_grooming', 'veterinary_care', 'day_care']);
            $table->string('service_name');
            $table->date('appointment_date');
            $table->time('appointment_time')->nullable(); // For services that need time
            $table->date('end_date')->nullable(); // For daycare/overnight services
            $table->string('frequency')->nullable(); // For daycare frequency
            $table->string('transportation')->nullable(); // For daycare transport
            $table->text('special_requests')->nullable();
            $table->string('pet_photo_path')->nullable();
            $table->string('vaccination_path')->nullable(); // For veterinary/boarding
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->text('admin_notes')->nullable();
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
        Schema::dropIfExists('appointments');
    }
};
