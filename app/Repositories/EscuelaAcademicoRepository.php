<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository as Repository;

/**
 * 
 */
class EscuelaAcademicoRepository extends Repository 
{
	
	public function model() {
        return 'App\Entities\EscuelaAcademico';
    }

}