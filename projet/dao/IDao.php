<?php
interface IDao
{
    // les fonctions qui doivent implementer par la classe etudiant 
    function create($o);
    function delete($o);
    function update($o);
    function findAll();
    function findById($id);
}
