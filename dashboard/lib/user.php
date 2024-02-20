<?php

function AddNewUser($name,$email,$password){
    $co=mysqli_connect("localhost","root","","portof");
    $q="INSERT INTO `user` (`name`,`email`,`password`) Values ('$name','$email','$password')";
    $query=mysqli_query($co,$q);

    $res=mysqli_affected_rows($co);

    if($res==1){
       return true;
    }
    else{
        
        return false;
    }
}

function login($email,$password){
    $co=mysqli_connect("localhost","root","","portof");
    $q="SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'";
    $query=mysqli_query($co,$q);
    $res=mysqli_fetch_assoc($query);

    return $res;



    

}
