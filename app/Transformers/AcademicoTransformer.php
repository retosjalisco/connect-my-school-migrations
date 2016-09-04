<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Academico;

/**
 * Class AcademicoTransformer
 * @package namespace App\Transformers;
 */
class AcademicoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Academico entity
     * @param \Academico $model
     *
     * @return array
     */
    public function transform(Academico $model)
    {
        return [
            'id'                => (int) $model->id,
            'rfc'               => $model->rfc,
            'name'              => $model->nombre,
            'last_name'         => $model->apaterno,
            'second_last_name'  => $model->apaterno,
            'email'             => $model->correo,
            'telephone'         => $model->telefono,
            'mobile_phone'      => $model->celular,
            'links'   => [
                [
                    'rel' => 'self',
                    'uri' => '/v0.1/academics/' . $model->id,
                ],
            ]
        ];
    }
}