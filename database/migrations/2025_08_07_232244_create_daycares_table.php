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
        Schema::create('daycares', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('pet_name');
            $table->string('pet_age');
            $table->string('pet_breed');
            $table->string('temperament');
            $table->time('dropoff_time');
            $table->time('pickup_time');
            $table->json('days_needed')->nullable();
            $table->string('food_type')->nullable();
            $table->string('feeding_schedule')->nullable();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->string('vaccination_file_path');
            $table->text('additional_notes')->nullable();
            $table->string('status')->default('pending');
            $table->string('service_type')->default('day_care');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
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
        Schema::dropIfExists('daycares');
    }
};
