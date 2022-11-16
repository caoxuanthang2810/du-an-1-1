<?php
    //  Kết nối database

    function pdo_get_connect(){
        $db_url = "mysql:host=202.92.5.49;dbname=gmkbrjnqhosting_nhom1;charset=utf8";
        $username = "gmkbrjnqhosting_nhom1";
        $password = "zA1GJuGNzA8F";
        
        try {
            $connect = new PDO($db_url,$username,$password);
            $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (\Throwable $error) {
            echo "Kết nối thất bại: " . $error ->getMessage();
        }
    }

    // Thực thi câu lệnh với database không cần dữ liệu trả về
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }

    // Truy vấn nhiều dữ liệu
    // Lấy hết data trả về
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);

        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetchAll();
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }

    //
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);

        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }

    // function pdo_login($sql){
    //     $connect = pdo_get_connect();
    //     $stmt = $connect->prepare($sql);
    //     $stmt -> execute();
    //     $Result = $stmt -> fetch(PDO::FETCH_ASSOC);

    //     return $Result;
    // }
?>