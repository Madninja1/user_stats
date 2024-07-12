<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(config('es_stats.db_prefix')
            . config('es_stats.entries_table'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')
                ->on(config('es_stats.user_table'));
            $table->timestamp('last_login')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('es_stats.db_prefix')
            . config('es_stats.entries_table'));
    }
};
