<?php

use App\Enums\ReservationTypeEnum;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('localisation');
            $table->date('date');
            $table->decimal('price', 10, 2);
            $table->integer('totalPlace');
            $table->boolean('isFull')->default(false);
            $table->boolean('isVerified')->default(false);
            $table->string('reservationType')->default(ReservationTypeEnum::AUTOMATIC->value);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
