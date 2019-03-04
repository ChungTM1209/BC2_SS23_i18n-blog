<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 01/03/2019
 * Time: 14:11
 */

namespace App\Http\Services;


interface BlogService
{
    public function getAll();

    public function create($request);

    public function findById($id);

    public function update($obj, $request);

    public function destroy($obj);
}