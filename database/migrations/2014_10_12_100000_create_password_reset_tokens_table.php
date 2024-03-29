<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('password_reset_tokens', static function (Blueprint $table): void {
            $table->string(column: 'email')->primary();

            $table->string(column: 'token');

            $table->timestamp(column: 'created_at')->nullable();
        });
    }
};
