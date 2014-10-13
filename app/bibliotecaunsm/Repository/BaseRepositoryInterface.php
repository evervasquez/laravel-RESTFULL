<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 11/10/14
 * Time: 03:09 PM
 */

namespace bibliotecaunsm\Repository;


interface BaseRepositoryInterface {

    public function selectAll();

    public function find($id);
} 