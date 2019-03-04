<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 01/03/2019
 * Time: 13:54
 */
namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Repository;

 abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    public function setModel(){
        $this->model = app()->make($this->getModel());
    }
    abstract function getModel();
     public function getAll()
     {
         return $this->model->all();
     }

     public function store($obj)
     {
         // TODO: Implement create() method.
         return $obj->save();
     }

     public function findById($id)
     {
         // TODO: Implement findById() method.
         return $this->model->findOrFail($id);
     }

     public function destroy($obj)
     {
         // TODO: Implement destroy() method.
         return $obj->delete();
     }


 }