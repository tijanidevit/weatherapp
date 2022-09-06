<?php
    include_once 'db.class.php';

    class SetUp extends DB{

        function run($query){
            return DB::execute($query,[]);
        }    
    }
?>