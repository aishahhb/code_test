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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->increments();
            $table->string('name');
            $table->string('media_id')->nullable();
            $table->string('job_category_id');
            $table->string('job_type_id')->nullable();
            $table->text('description')->nullable();
            $table->string('detail')->nullable();
            $table->string('business_skill')->nullable();
            $table->string('knowledge')->nullable();
            $table->string('location')->nullable();
            $table->string('activity')->nullable();
            $table->string('academic_degree_doctor')->nullable();
            $table->string('academic_degree_master')->nullable();
            $table->string('academic_degree_professional')->nullable();
            $table->string('academic_degree_bachelor')->nullable();
            $table->string('salary_statistic_group')->nullable();
            $table->double('salary_range_first_year', 15, 2)->nullable();
            $table->double('salary_range_average', 15, 2)->nullable();
            $table->double('salary_range_remarks', 15, 2)->nullable();
            $table->string('restriction')->nullable();
            $table->string('estimated_total_workers')->nullable();
            $table->string('remarks')->nullable();
            $table->string('url')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('sort_order')->nullable();
            $table->string('publish_status')->nullable();
            $table->string('version')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->timestamp('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
