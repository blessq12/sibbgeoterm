<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Company;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_legals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class);
            $table->string('inn');
            $table->string('kpp');
            $table->string('ogrn');
            $table->string('okpo');
            $table->string('okved');
            $table->string('okfs');
            $table->string('okopf');
            $table->string('addressLegal');
            $table->string('addressFact');
            $table->string('companyName');
            $table->string('owner');
            $table->string('tel');
            $table->string('fax');
            $table->string('bankDetails');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_legals');
    }
};
