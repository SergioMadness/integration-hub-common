<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Integrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('application_id')->nullable();
            $table->integer('company_id');
            $table->jsonb('body');
            $table->enum('status', ['new', 'queue', 'need_another_attempt', 'success', 'failed'])->default('new');
            $table->jsonb('processing_info')->nullable();
            $table->string('request_type')->index();
            $table->text('response')->nullable();
            $table->timestamps();

            $table->index('status');
            $table->index('created_at');
            $table->foreign('application_id')
                ->on('api_clients')
                ->references('id')
                ->onDelete('set null');
            $table->foreign('company_id')
                ->on('company')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('requests');
    }
}
