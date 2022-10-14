<?php

namespace Odc\Mvc\core;

class validation
{
    private $errors = [];
    public function min($key, $value, $condaition)
    {
        if (strlen($value) < $condaition) {
            $this->errors[] ="$key less than minimum ($condaition)\n";
        }
        return $this;
    }
    public function max($key, $value, $condaition)
    {
        if (strlen($value) > $condaition) {
            $this->errors[]= "$key greater than maximum ($condaition)\n";
        }
        return $this;
    }
    public function required($key, $value)
    {
        if(empty($value)){
            $this->errors[]= "$key is required\n";
        }
        return $this;
    }
    public function message(){
        foreach($this->errors as $error){
                echo "$error\n";
        }
    }
}
