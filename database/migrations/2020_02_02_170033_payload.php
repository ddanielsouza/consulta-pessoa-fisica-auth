<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $deparment = new App\Models\Department();
        $deparment->description = 'Credito Pessoal';
        $deparment->bureau = 'Serasa';
        $deparment->save();

        $user = new  App\User;
        $user->name = 'Daniel Souza';
        $user->email = 'daniell.oliveirra@gmail.com';
        $user->password = app('hash')->make('123456');
        $user->department_id = $deparment->id;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
