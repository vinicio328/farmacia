<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('descripcion', 256)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
		
		DB::table('categorias')->insert(array('id'=>'1','nombre'=>'Medicamentos', 'descripcion'=>'pastiilas,inyeciones'));
        DB::table('categorias')->insert(array('id'=>'2','nombre'=>'Analgésicos', 'descripcion'=>'pastillas, inyecciones, pomadas'));
        DB::table('categorias')->insert(array('id'=>'3','nombre'=>'Antibióticos', 'descripcion'=>'oral,inyectado,untado'));
        DB::table('categorias')->insert(array('id'=>'4','nombre'=>'Aparato Cardiovascular', 'descripcion'=>'para la c'));
        DB::table('categorias')->insert(array('id'=>'5','nombre'=>'Aparato Respiratorio', 'descripcion'=>'Aparato Respiratorio'));
        DB::table('categorias')->insert(array('id'=>'6','nombre'=>'Primeros Auxilios', 'descripcion'=>'insumos de primera auxilios'));
        DB::table('categorias')->insert(array('id'=>'7','nombre'=>'Mamá y Bebe ', 'descripcion'=>'Insumos para el cuidado de los 2 pañales,cremas etc.'));
        DB::table('categorias')->insert(array('id'=>'8','nombre'=>'Accesorios para el bebe', 'descripcion'=>'juguetes chupones etc.'));
        DB::table('categorias')->insert(array('id'=>'9','nombre'=>'Cosméticos para el bebe', 'descripcion'=>'cremas,talco etc.'));
        DB::table('categorias')->insert(array('id'=>'10','nombre'=>'Fórmulas y cereales infantiles ', 'descripcion'=>'cereales'));
        DB::table('categorias')->insert(array('id'=>'11','nombre'=>'Hogar', 'descripcion'=>'cereales'));
        DB::table('categorias')->insert(array('id'=>'12','nombre'=>'Pañales ', 'descripcion'=>'pañales para adulto y bebe'));
        DB::table('categorias')->insert(array('id'=>'13','nombre'=>'Cuidado Personal ', 'descripcion'=>'pomadas'));
        DB::table('categorias')->insert(array('id'=>'14','nombre'=>'Accesorios', 'descripcion'=>'guantes etc.'));
        DB::table('categorias')->insert(array('id'=>'15','nombre'=>'Cuidado Bucal', 'descripcion'=>'Pastas dental y hilos dental'));
        DB::table('categorias')->insert(array('id'=>'16','nombre'=>'Cuidado de la Piel ', 'descripcion'=>'bloqueadores solares, ect.'));
        DB::table('categorias')->insert(array('id'=>'17','nombre'=>'Cuidado del Cabello ', 'descripcion'=>'shampoo, acondicionador, ect.'));
        DB::table('categorias')->insert(array('id'=>'18','nombre'=>'Cuidado Femenino ', 'descripcion'=>'cremas y gotas'));
        DB::table('categorias')->insert(array('id'=>'19','nombre'=>'Miscelaneos', 'descripcion'=>'Miscelaneos'));
        DB::table('categorias')->insert(array('id'=>'21','nombre'=>'Salud Sexual ', 'descripcion'=>'Salud sexual'));
        DB::table('categorias')->insert(array('id'=>'22','nombre'=>'Anticonceptivos ', 'descripcion'=>'pastillas inyecciones'));
        DB::table('categorias')->insert(array('id'=>'23','nombre'=>'Preservativos ', 'descripcion'=>''));
        DB::table('categorias')->insert(array('id'=>'24','nombre'=>'Pruebas de Embarazo', 'descripcion'=>''));    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
