<?php
namespace bibliotecaunsm\Repository;
use bibliotecaunsm\Entity\Facultad;

class FacultadsRepository implements BaseRepositoryInterface
{

    public function selectAll()
    {
        $facultades = Facultad::all();

        foreach ($facultades as $key =>  $facultad) {
            $datos[$key] = $facultad;
        }
        return \Response::json($datos);
    }

    public function find($id)
    {
        //implemets metod
    }
}