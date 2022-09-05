<?php
    include_once 'db.class.php';

    class users extends DB{

        function register($fullname,$email,$location_code,$password){
            return DB::execute("INSERT INTO users(fullname,email,location_code,password) VALUES(?,?,?,?)", [$fullname,$email,$location_code,$password]);
        }
        function fetch_user($id){
            return DB::fetch("SELECT * FROM users WHERE id = ? OR email = ? ",[$id,$id] );
        }
        function delete_user($id){
            return DB::execute("DELETE FROM users WHERE id = ? ",[$id] );
        }
        function update_user($user,$id){
            return DB::execute("UPDATE users SET user = ?  WHERE id = ? ", [$user,$id]);
        }
       
        function users_num(){
            return DB::num_row("SELECT id FROM users ", []);
        }

        function check_email_existence($email){
            if (DB::num_row("SELECT id FROM users WHERE email = ?", [$email]) > 0){
                return true;
            }
            else{
                return false;
            }
        }

        function login($email,$password){
            if (DB::num_row("SELECT id FROM users WHERE email = ? AND password = ?", [$email,$password]) > 0){
                return true;
            }
            else{
                return false;
            }
        }

        function check_edit_user_existence($fullname,$id){
            if (DB::num_row("SELECT id FROM users WHERE fullname = ? AND id <> ? ", [$fullname,$id]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>