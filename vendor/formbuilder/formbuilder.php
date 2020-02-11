<?php

class FormBuilder
{
    public function startform($action = '', $method = 'POST', $class = '')
    {
        return "<form action='$action' method='$method' class='$class'>";

    }

    public function endform()
    {

        return '</form>';
    }

    public function input($type, $nom, $placeholder)
    {
        echo $nom . '<br><br>';
        return '<input type="' . $type . '" name="' . $nom . '" placeholder="' . $placeholder . '">';



    }

    public function button($val, $id = "")
    {

        return "<button id='$id' type='submit' name='envoyer'>$val</button>";

    }

    public function select()
    {
        echo ' <label for="Select">Pays' . '<br><br>';
        return '<select name="Pays" id="pays-select">
    <option value="france">France</option>
    <option value="angleterre">Angleterre</option>
    <option value="amerique">Amerique</option>
    <option value="allemagne">Allemagne</option>
    <option value="portugal">Portugal</option>
    <option value="espagne">Espagne</option>
</select>';

    }

    public function textArea($type, $placeholder)
    {

        return '<textarea type="' . $type . '",placeholder="' . $placeholder . '"></textarea>';
    }

    public function checkbox1($type, $nom, $checkbox)
    {
        echo '<label>Homme</label>&nbsp;';
        echo $checkbox;
        return '<input type="' . $type . '" name="' . $nom . '" checkbox="' . $checkbox . '"></type>';

    }

    public function checkbox2($type, $nom, $checkbox)
    {
        echo '<label>&nbsp;Femme&nbsp; </label>';
        echo $checkbox;
        return '<input type="' . $type . '" name="' . $nom . '" checkbox="' . $checkbox . '"></type>';

    }
}

