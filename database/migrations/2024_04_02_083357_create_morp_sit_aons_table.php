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
        Schema::create('morp_sit_aons', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no')->nullable();
            $table->string('no')->nullable();
            $table->date('date')->nullable();
            $table->string('name_aon')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('crc_f')->nullable();
            $table->string('crc_t')->nullable();
            $table->string('rate')->nullable();
            $table->string('seq_no')->nullable();
            $table->string('aon_ac_name')->nullable();
            $table->string('acno_nee')->nullable();
            $table->decimal('money_nee')->nullable();
            $table->string('money_nee_name')->nullable();
            $table->string('hub_ac_name')->nullable();
            $table->string('acno_mee')->nullable();
            $table->decimal('money_mee')->nullable();
            $table->string('money_mee_name')->nullable();
            $table->string('note')->nullable();
            $table->integer('user_id');
            $table->integer('department_id');
            $table->integer('del')->default('1');
            $table->integer('count')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('morp_sit_aons');
    }
};
