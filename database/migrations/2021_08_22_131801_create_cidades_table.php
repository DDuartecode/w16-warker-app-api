<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome_da_cidade');
            $table->double('latitude');
            $table->double('longitude');
            $table->timestamps();
        });
    }

    //|id |nome_da_cidade|latitude|longitude|created_at|updated_at|
    //|int|string        |double  |double   |timestamp |timestamp |

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
