<?php

namespace Database;

interface ModelInterface
{
    public function save();
    public function delete();
    public static function find($id);
}