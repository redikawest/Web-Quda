
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horse', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kuda');
            $table->string('jk_kuda');
            $table->string('wr_kuda');
            $table->string('pj_kuda');
            $table->string('in_kuda');
            $table->string('tl_kuda');
            $table->string('np_kuda');
            $table->string('nc_kuda');
            $table->string('gb_kuda');
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
        Schema::dropIfExists('horse');
    }
}
