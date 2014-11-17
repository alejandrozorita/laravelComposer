<?php
/**
 * User: AlejandroZorita
 * Date: 17/11/14
 * Time: 13:16
 */

namespace intranet\Managers;

abstract class BaseManager {
    protected $entity;
    protected $data;
    protected $error;

    public function __construct($entity, $data)
    {
        $this->entity = $entity;
        $this->data = array_only($data, array_keys(($this->getRules)));
    }

    //Cuando extiendes esta clase, este metodo no se hereda por lo que hay que ponerlo obligatoriamente
    abstract public function getRules();


    /**
     *
     */
    public function isValid()
    {
        $rules = $this->getRules;
        $validation = \Validator::make($this->data, $rules);

        $isValid = $validation->passes();
        $this->errors = $validation->massage;
        return $isValid;

    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function save()
    {
        if (! $this->isValid)
            return false;

        $this->entity->fill($this->data);
        $this->entity-save();
        return true;

    }

}