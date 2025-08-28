<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('memories', function (Blueprint $table) {
            // Drop old column
            $table->dropColumn('images');

            // Add new column for single image path
            $table->string('image')->nullable()->after('from');
        });
    }

    public function down(): void
    {
        Schema::table('memories', function (Blueprint $table) {
            // Rollback: remove new column, add old one back
            $table->dropColumn('image');
            $table->json('images')->nullable()->after('from');
        });
    }
};