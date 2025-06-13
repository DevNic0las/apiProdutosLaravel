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
        Schema::create('products', function (Blueprint $table) {
                           $table->id();
                $table->timestamps();
                $table->string("product_name");
                $table->uuid("uuid")->unique();
                $table->decimal("price", 8, 2);
                $table->string("slug")->unique();
                $table->integer("amount");
                $table->foreignId("categories_id")->constrained("categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
