<?php
/*
interface IDao {

    function create($o);

    function delete($o);

    function update($o);

    function findAll();

    function findById($id);*/


interface IDao {

    public function create($obj);

    public function update($obj);

    public function delete($obj);

    public function getById($obj);

    public function getAll();
}


