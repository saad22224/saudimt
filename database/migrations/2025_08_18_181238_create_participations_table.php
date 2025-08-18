<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');       // الاسم الأول
            $table->string('middle_name');      // الاسم الأوسط
            $table->string('last_name');        // اسم العائلة
            $table->string('email')->unique();  // البريد الإلكتروني
            $table->string('phone');            // رقم الهاتف
            $table->string('organization')->nullable(); // اسم المؤسسة
            $table->string('passport')->nullable(); // رقم جواز السفر
            $table->string('country');          // الدولة
            $table->string('city');             // المدينة
            $table->string('specialization');   // التخصص
            $table->string('gender'); // الجنس
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
