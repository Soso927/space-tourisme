<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        Schema::table('planets', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('name');
        });

        // Backfill: générer un slug pour les lignes existantes
        $planets = DB::table('planets')->select('id','name')->get();
        foreach ($planets as $p) {
            DB::table('planets')
              ->where('id', $p->id)
              ->update(['slug' => Str::slug($p->name)]);
        }

        // Rendre non nul si tu veux
        Schema::table('planets', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
        });
    }

    public function down(): void {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};

