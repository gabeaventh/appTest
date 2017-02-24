<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Stocks.
 *
 * @author  The scaffold-interface created at 2017-02-04 01:24:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Stocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('stocks',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('Item');
        
        $table->String('Description');
        
        $table->String('Supplier');
        
        $table->integer('Actual');
        
        $table->integer('Lower_level');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('stocks');
    }
}
