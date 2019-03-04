<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 01/03/2019
 * Time: 13:44
 */
namespace App\Http\Repositories;
interface Repository
{
    public function getAll();
    public function store($obj);
    public function findById($id);
    public function destroy($obj);
}