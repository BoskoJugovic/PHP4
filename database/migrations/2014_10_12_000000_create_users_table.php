<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $data = [
            ['name'=>'asdf', 'email'=>'asdf@asdf.rd', 'password'=>'$2y$10$6.GpO/lNkmIUFQodcx.Vie4eBDJKG8vldLYyqm9Es5/TVFcdUjLuW'],
            ['name'=>'bjugovic16', 'email'=>'bjugovic16@raf.rs', 'password'=>'$2y$10$HGo4pWMupoqVKLClnRWQQOVdxm.NdyTdYB2548M/BW5ZgxrAj50mi'],
            ['name'=>'admin', 'email'=>'admin@admin.admin', 'password'=>'$2y$10$LNKpksvnHAkCcIi2DYdIj.tXJiNMXk/r6DktXwFqf4LBLSXOKjle2'],
            ['name'=>'aleksa', 'email'=>'aleksagaj@gmail.com', 'password'=>'$2y$10$ZyaCe3M2ucNJsYAorKjzJuIYhafWp9LV1eTloTpY3iWKB/WPkm2mu'],
            ['name'=>'marcoH', 'email'=>'mhietala@hotmail.com', 'password'=>'$2y$10$85KJGN/yegbkz149I5t4KuLrUTtTLXUL8yLowr.O./9hXUddL0.6u'],
            ['name'=>'9bodova', 'email'=>'molimtebrate@gmail.com', 'password'=>'$2y$10$RKL3Gw9o5Odxjetit59s4u033LWTAFFVsAoJPsxbyH4DQQPC9Tgb2'],
            ['name'=>'dusan sijacic', 'email'=>'dsijacic16@gmail.com', 'password'=>'$2y$10$ivmeILPeHquIOpns7aGWfu.KyTI8630knNWzdMJkcoUSgC.9ZhsF.'],
            ['name'=>'markodimic', 'email'=>'mdimic007@sbb.rs', 'password'=>'$2y$10$ZPFzzK0q5Hx54Z14iartSeCKueGnxOJIqxCO7G8jbDfmxwu1D3zo.'],
            ['name'=>'sfhobbit', 'email'=>'sfhobbit2004@gmail.com', 'password'=>'$2y$10$ZBbZCXVjIatWnh/730pvNu9KHPuRn5OztOS2B1xuEPLpB2OTiRBp2'],
            ['name'=>'agajic15', 'email'=>'agajic15@gmail.com', 'password'=>'$2y$10$5boKxR9p7vA8tWXHTA0WRuprDwTgosFbqwxwSA.fQZALwvQ6uKERe']
        ];
        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
