<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcategoria')->unsigned();
            $table->string('codigo', 50)->nullable();
            $table->string('nombre', 100)->unique();
            $table->decimal('precio_venta', 11, 2);
            $table->integer('stock');
            $table->string('descripcion', 256)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->foreign('idcategoria')->references('id')->on('categorias');
        });
        DB::table('articulos')->insert(array('id'=>'1','idcategoria'=>'1','codigo'=>'M1','nombre'=>'ASPIRINA ADULTO TABLETAS 500MG X 100','precio_venta'=>'78.44','stock'=>'500','descripcion'=>'El ácido acetilsalicílico, principio activo de este medicamento, actúa reduciendo el dolor y la fiebre.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'2','idcategoria'=>'1','codigo'=>'M2','nombre'=>'OMEPRAZOL GF 20 MG. X 10 CAPS.','precio_venta'=>'129.27','stock'=>'100','descripcion'=>'Se usa para tratar los síntomas de la enfermedad por reflujo gastroesofágico (ERGE) y otras afecciones causadas por el exceso de ácido en el estómago.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'3','idcategoria'=>'2','codigo'=>'A1','nombre'=>'IBUPROFENO MK 400MG X 50 TAB','precio_venta'=>'118.51','stock'=>'50','descripcion'=>'Se suele utilizar para dolores causados por inflamación, como lesiones musculares, artritis, dolor menstrual, amigdalitis','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'4','idcategoria'=>'2','codigo'=>'A2','nombre'=>'CELECOXIB GF 200MG X 10 CAPS','precio_venta'=>'103.94','stock'=>'70','descripcion'=>'Inhibe la producción de prostaglandina, lo cual provoca una reducción de la inflamación y el dolor pero minimizando los efectos adversos gastrointestinales que tienen los AINEs no selectivos.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'5','idcategoria'=>'2','codigo'=>'A3','nombre'=>'PARACETAMOL MK CAPLETAS 750MG X 20','precio_venta'=>'40.15','stock'=>'100','descripcion'=>'No es antiinflamatorio, por lo que se usa para lesiones o trastornos que no se acompañen de inflamación, como dolor de cabeza y los síntomas ocasionados por gripe o la fiebre.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'6','idcategoria'=>'3','codigo'=>'ANT1','nombre'=>'AMIKACINA 500 MG * 2 ML (NORMON)','precio_venta'=>'52.00','stock'=>'20','descripcion'=>'Se usa en el tratamiento de diferentes infecciones bacterianas. Esto incluye infecciones de las articulaciones, infecciones intraabdominales, meningitis, neumonía, sepsis e infecciones del tracto urinario.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'7','idcategoria'=>'3','codigo'=>'ANT2','nombre'=>'AMOXICILINA 250MG/5ML * 60 ML(WASHINGTON)','precio_venta'=>'20.01','stock'=>'150','descripcion'=>'Actúa contra un amplio espectro de bacterias, tanto Gram positivos como Gram-negativos. Por esto se emplea a menudo como primer fármaco en infecciones de diferente gravedad, tanto en medicina humana como también en veterinaria. ','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'8','idcategoria'=>'3','codigo'=>'ANT3','nombre'=>'PENICILINA PROCAINA 4.0 * 1 AMPOLLA(WASHINGTON)','precio_venta'=>'23.50','stock'=>'70','descripcion'=>'empleados profusamente en el tratamiento de infecciones provocadas por bacterias sensibles. ','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'9','idcategoria'=>'3','codigo'=>'ANT4','nombre'=>'NEOMICINA PENICILINA POMADA 12 G * 25','precio_venta'=>'162.50','stock'=>'70','descripcion'=>'es un fármaco de la familia de los aminoglucósidos, que se utiliza en clínica como antibiótico bactericida tanto por vía tópica como oral, aunque su uso por vía oral está disminuyendo debido a su elevada toxicidad cuando se administra de forma sistémica.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'10','idcategoria'=>'4','codigo'=>'C1','nombre'=>'CARDIO VITAL * 30 CAPSULAS','precio_venta'=>'53.60','stock'=>'75','descripcion'=>'Bloquea selectivamente el receptor AT1 , lo que provoca una reducción de los efectos de la angiotensina II.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'11','idcategoria'=>'4','codigo'=>'C2','nombre'=>'CARDIOASPIRINA 81 MG * 30 TABLETAS','precio_venta'=>'70.60','stock'=>'80','descripcion'=>'Para las personas que desean tener el poder de salvar su vida, CardioAspirina® Bayer le sirve de agente protector del corazón, especialmente después de los 35 años y cuando otros factores predisponen a un infarto.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'12','idcategoria'=>'4','codigo'=>'C3','nombre'=>'CARDIOZAR FORTE 100 MG * 30 TABLETAS','precio_venta'=>'215.60','stock'=>'20','descripcion'=>'Está indicado en el tratamiento de: Hipertensión arterial como monofármaco o asociado a otros antihipertensivos.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'13','idcategoria'=>'5','codigo'=>'AR1','nombre'=>'IPRAK SP 750MCG/1ML SOLUCIÓN PARA RESPIRADOR * 20 ML','precio_venta'=>'281.25','stock'=>'30','descripcion'=>'Bromuro de ipratropium. Para el tratamiento del broncoespasmo agudo. Solución para respirador. ','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'14','idcategoria'=>'5','codigo'=>'AR2','nombre'=>'ALBUGENOL TR P/RESPIRADOR * 20 ML SOLUCION','precio_venta'=>'240.54','stock'=>'25','descripcion'=>'BRONCODILATADOR Y REDUCTOR DE LA BRONCOCONSTRICCIÓN, HIPERSECRECIÓN MUCOSA Y EDEMA. TRATAMIENTO DEL ASMA BRONQUIAL, BRONQUITIS CRÓNICA Y ENFISEMA','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'15','idcategoria'=>'5','codigo'=>'AR3','nombre'=>'BRONCOMAT SOL. P/RESPIRAR * 30 ML','precio_venta'=>'121.00','stock'=>'45','descripcion'=>'Es un antiasmático broncodilatador, está indicado en el alivio del broncoespasmo en asma bronquial, bronquitis aguda y crónica y enfisema. Estimula los receptores b-adrenérgicos y tiene poco o ningún efecto sobre los receptores µ-adrenérgicos. ','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'16','idcategoria'=>'6','codigo'=>'PA1','nombre'=>'ALCOHOL MEDICINAL 99° * 500 ML (SANTE)','precio_venta'=>'24.95','stock'=>'100','descripcion'=>'Aplicado a la piel se usa para desinfectarla antes de una inyección y antes de una cirugía.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'17','idcategoria'=>'6','codigo'=>'PA2','nombre'=>'CURITAS BRIGHTS DIAMANTE * 25 (3M)','precio_venta'=>'32.30','stock'=>'50','descripcion'=>'Aplicado en la piel para aislar heridas leves','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'18','idcategoria'=>'6','codigo'=>'PA3','nombre'=>'GASA ELU ABSORBENTE * 100','precio_venta'=>'28.00','stock'=>'1000','descripcion'=>'La gasa puede estar constituida por un tejido fino enrollado en capas individuales destinado a realizar vendajes espirales, o bien puede ser una almohadilla gruesa de múltiples capas destinada a realizar vendajes compresivos estériles.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'19','idcategoria'=>'7','codigo'=>'BB1','nombre'=>'GERBER SET PEINE/CEPILLO PARA BEBES','precio_venta'=>'16.50','stock'=>'40', 'descripcion'=>'Kit de limpieza para el cabello de bebe','descripcion'=>'','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'20','idcategoria'=>'8','codigo'=>'ABB1','nombre'=>'EVENFLO BIBERON CLASSIC FLUJO MEDIO 4OZ ','precio_venta'=>'12.00','stock'=>'50','descripcion'=>'Biberon de 4 onzas para bebe.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'21','idcategoria'=>'9','codigo'=>'CBB1','nombre'=>'LIMPIADOR NASAL Y DE OJOS BEBES','precio_venta'=>'18.25','stock'=>'45','descripcion'=>'Kit de limpieza personal para bebe.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'22','idcategoria'=>'23','codigo'=>'P1','nombre'=>'PRUDENCE CONDONES SABOR Y AROMA MENTA 3UNI','precio_venta'=>'12.25','stock'=>'300','descripcion'=>'Condón masculino de hule látex, lubricado con silicón','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'23','idcategoria'=>'23','codigo'=>'P2','nombre'=>'PRUDENCE CONDONES ANILLOS Y PUNTOS 3UNI','precio_venta'=>'13.50','stock'=>'200','descripcion'=>'Condón masculino de hule látex texturizado con anillos y puntos, lubricado con silicón','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'24','idcategoria'=>'23','codigo'=>'P3','nombre'=>'PRUDENCE CONDONES ANILLO TERREMOTO','precio_venta'=>'44.75','stock'=>'300','descripcion'=>'Disfruta con tu pareja del placer prolongado que te brindan las constantes vibraciones de Prudence Terremoto, que estimula de forma directa las zonas sensibles de cada uno, haciendo una experiencia realmente vibrante.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'25','idcategoria'=>'15','codigo'=>'CB1','nombre'=>'ORAL B ENJUAGUE 473ML 3D WHITE','precio_venta'=>'34.75','stock'=>'100','descripcion'=>'Enjuague bucal Oral B. Blanqueador sin alcohol, ayuda a eliminar bacterias y a combatir el mal aliento.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'26','idcategoria'=>'15','codigo'=>'CB2','nombre'=>'Crema dental Colgate Luminous White 125','precio_venta'=>'35.00','stock'=>'100','descripcion'=>'Complementa la limpieza de tu boca utilizando la pasta dental Colgate luminous white y disfruta de dientes más blancos en poco tiempo. Su presentación econopack de 125 ml te ayuda a combatir los gérmenes de la caries..','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'27','idcategoria'=>'15','codigo'=>'CB3','nombre'=>'ORAL B HILO DENTAL ESSENTIAL 50M NORMAL','precio_venta'=>'29.00','stock'=>'90','descripcion'=>'s un artículo de limpieza que te ayuda a prevenir gingivitis y a remover efectivamente la placa bacteriana, deslizándose de manera fácil y rápida entre tus dientes blancos.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'28','idcategoria'=>'17','codigo'=>'CC1','nombre'=>'GOTAS DE SEDA PARA CABELLO 75 ML','precio_venta'=>'22.50','stock'=>'110','descripcion'=>'Sílica para cabello Moss con extracto de almendras fresa 75 ml','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'29','idcategoria'=>'17','codigo'=>'CC2','nombre'=>'HERBAL ESSEN ESPUMA CABELLO RIZO 227G','precio_venta'=>'31.00','stock'=>'130','descripcion'=>'La forma más sencilla de peinarte sin complicaciones, acomodando cada cabello en tú peinado diario, de la manera que tú prefieras y luciendo un aspecto húmedo con aroma frutal que te encantará y te hará lucir increíble.','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'30','idcategoria'=>'16','codigo'=>'CP1','nombre'=>'PONDS CREMA FACIAL CLARANT B3 PIEL NORMAL A GRASA 50G','precio_venta'=>'18.50','stock'=>'78','descripcion'=>'Previene la aparición de manchas en la piel con la Ponds Clarant B3 con FPS 30','condicion'=>'1'));
        DB::table('articulos')->insert(array('id'=>'31','idcategoria'=>'16','codigo'=>'CP2','nombre'=>'Bandas depilatorias corporales Veet Easy Grip cera fría piel sensible 12 pzas','precio_venta'=>'108.05','stock'=>'95','descripcion'=>'Las bandas de cera Veet, te dan un toque de suavidad que dura hasta por cuatro semanas. Cada una de las bandas está especialmente formulada con una mezcla de vitamina E.','condicion'=>'1'));


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
