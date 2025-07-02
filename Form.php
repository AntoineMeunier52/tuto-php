<?php

class Form {

    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function input($name) {

    }

    public function submit() {
        echo 'Submit';
    }
}