<?php

namespace Models;

interface IModel
{
    function all();
    function save();
    function update();
    function delete();
    function find($id);
}