<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //A/A	Αριθμός Αίτησης		Επωνυμία Επιχείρησης					ΑΦΜ	Βαθμολογία	Ποσό Ενίσχυσης	
											
        Schema::create('raw', function (Blueprint $table) {
            $table->id();
            $table->string('register_number');
            $table->string('invoice_name');
            $table->string('vat');
            $table->decimal('rating');
            $table->decimal('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw');
    }
}
