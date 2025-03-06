<?php

class Button{
    public $text;

    public function __construct($text){
        $this->text = $text;
    }

    public function __toString(){
        $style = "
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        ";

        return "<button style='{$style}'>{$this->text}</button>";
    }
}

class Input{
    public $type = "text";

    public function __construct($type){
        $this->type = $type;
    }

    public function __toString()
    {
        $style = "
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;    
        ";

        return "<input type='{$this->type}' style='{$style}'>";
    }
}
?>