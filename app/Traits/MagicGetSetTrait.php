<?php

namespace App\Traits;

trait MagicGetSetTrait {

    /**
     * __call
     *
     * Use __call to check if we are using magic get or magic set
     *
     * @param  mixed $method
     * @param  mixed $params
     * @return void
     */
    public function __call($method, $params) {
        $parts = preg_split('/([A-Z][^A-Z]*)/', $method, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); // Split by capital letters
        $action = array_shift($parts); // Check the method action

        if ($action == 'get' || $action == 'set') { // Check if the method is a get or set method
            $property = strtolower(implode('_', $parts)); // Split attribute words with _
            $params = (isset($params[0])) ? [$property, $params[0]] : [$property]; // If we have a value for the property set the parameters

            return call_user_func_array([$this, $action.'Attribute'], $params); // Run magic method
        }
        if (method_exists($this, $method)) { // Check if there is a method for this and call it
            return call_user_func_array([$this, $method], $params);
        }

        throw new \Exception('Method "'.$method.'" not implemented.');
    }

    /**
     *
     * getAttribute
     *
     * @param string $property
     *
     * @return mixed
     */
    public function getAttribute(string $property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    /**
     *
     * setAttribute
     *
     * @param string $property
     * @param mixed  $value
     *
     * @return $this
     */
    public function setAttribute(string $property, $value = null) {
        $this->$property = $value;
        return $this;
    }

}
