<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
//            $table->foreignId("author_id");
            $table->string("article_tittle", 100);
            $table->string("article_slug", 200);
            $table->text("article_img_path")->nullable();
            $table->enum("article_status", ["onAir", "ReleasePending", "NotLive"])->default("ReleasePending");
            $table->dateTime("article_publish_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Articles');
    }
};
