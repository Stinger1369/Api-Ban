<?php

class Form
{
  public function input($name, $id, $type, $placeholder, $class = "form-control")
  {
    return '<input name="' . $name . '" id="' . $id . '" type="' . $type . '" class="' . $class . '" placeholder="' . $placeholder . '">';
  }
}
