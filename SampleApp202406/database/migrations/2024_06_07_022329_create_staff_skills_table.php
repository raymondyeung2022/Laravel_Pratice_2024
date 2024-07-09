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
        Schema::create('staff_skills', function (Blueprint $table) {
            $table->foreignId('staff_id')->comment('職員プロフィールID')
                ->references('id')->on('staffs')->cascadeOnDelete()->cascadeOnUpdate()->nullable(false); //外部キー制約をつける
            $table->foreignId('skill_id')->comment('スキルID')
                ->references('id')->on('mst_skills')->cascadeOnDelete()->cascadeOnUpdate()->nullable(false); //外部キー制約をつける
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_skills');
    }
};
