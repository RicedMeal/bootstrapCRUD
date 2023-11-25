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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('Supplier_ID');
            $table->string('Supplier_Name');
            $table->string('Address');
            $table->string('Tel_No');
            $table->string('Fax_No');
            $table->string('Website');
            $table->string('Contact_Person');
            $table->string('Email');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
