<?php

namespace App\Models;

class Journal
{
    public $id;
    public $name;
    public $publishedYear;

    public function __construct($id, $name, $publishedYear)
    {
        $this->id = $id;
        $this->name = $name;
        $this->publishedYear = $publishedYear;
    }
}
