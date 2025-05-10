<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('client_name');
            $table->string('location');
            $table->string('map_link');
            $table->decimal('plot_size', 10, 2);
            $table->decimal('built_up_area', 10, 2);
            $table->integer('no_of_floors');
            $table->enum('project_type', ['Residential', 'Commercial', 'Villa', 'Apartment', 'Industrial']);
            $table->enum('construction_package', ['Classic', 'Premium', 'Luxury']);
            $table->json('media')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};