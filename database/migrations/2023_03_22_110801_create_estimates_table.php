<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesTable extends Migration
{
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('amount', 8, 2);
            $table->dateTime('approved_at')->nullable();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
