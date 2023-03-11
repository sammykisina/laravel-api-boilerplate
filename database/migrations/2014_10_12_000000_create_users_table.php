<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', static function (Blueprint $table): void {
            $table->uuid(column: 'id')->primary();

            $table->string(column: 'name');
            $table->string(column: 'email')->unique();
            $table->string(column: 'password');

            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->timestamps();
        });
    }
};
