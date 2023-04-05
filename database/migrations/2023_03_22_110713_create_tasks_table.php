<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('type', ['bug', 'feature'])->default('bug');
            $table->enum('status', ['todo', 'to_estimate', 'waiting_estimate_approbation', 'to_validate', 'to_bill', 'in_progress', 'done'])->default('todo');
            $table->boolean('is_billable')->default(false);
            $table->dateTime('due_date')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->unsignedInteger('estimated_time')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
