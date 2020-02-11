<?php


class validator
{

    private $value;
    private $errors = [];
    private $name;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function isMail($var)
    {
        if (!filter_var($var, FILTER_VALIDATE_EMAIL)) {

            $this->errors[$this->getName()] = "ce n'est pas un email";

        }
    }

    public function isText()
    {
        echo $this->getName();
        if (!preg_match("/^[a-z]*$/", $this->getValue())) {
            $this->errors[] = "<span class='text-danger'>".$this->getName() . "</span> : ce n'est pas une chaine";

        }
    }

    public Function isPhone($var)
    {
        if (!preg_match("/^[0-9]*$/", $var)) {

            $this->errors[] = "ce n'est pas un numero de telephone";

        }
    }


}


