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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable(true)->comment('部署ID')->references('id')->on('mst_departments')->cascadeOnDelete()->cascadeOnUpdate(); //外部キー制約をつける
            $table->string('staff_name')->comment('職員名');
            $table->date('birth_date')->comment('生年月日');
            $table->tinyInteger('sex')->comment('性別');
            $table->string('email')->comment('メールアドレス');
            $table->text('self_intro')->comment('自己紹介')->nullable(true);
            $table->string('status')->comment('ステータス')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
