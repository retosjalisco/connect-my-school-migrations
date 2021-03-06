<?php

use Illuminate\Database\Seeder;

class MunicipiosInegiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excel = storage_path('app/xlsx/cct_activos.xlsx');

        Excel::load($excel, function($reader) {

		    $reader->each(function($sheet) {

		    	if(is_null(DB::table('municipios_inegi')->select()->find($sheet->municipio_clave_inegi)))
		    	{
		    		DB::table('municipios_inegi')->insert([
                        'id' => $sheet->municipio_clave_inegi,
		    			'nombre' => utf8_decode($sheet->nombre_municipio),
                        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
		    		]);
		    	}

			});

		});
    }
}
