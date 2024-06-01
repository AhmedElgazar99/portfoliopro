<?php


function AddNewPro($desc,$img,$user_id){
    $co=mysqli_connect("localhost","root","","portof");
    $q="INSERT INTO `portfolio` (`descr`,`img`,`user_id`) Values ('$desc','$img','$user_id')";
    $query=mysqli_query($co,$q);

    $res=mysqli_affected_rows($co);
    if(isset($res)){
        return true;
    }
    else{
        return false;
    }
    
}

function getportfolio(){
    $co=mysqli_connect("localhost","root","","portof");
    $q="SELECT * FROM `userportfolio` ";
    $query=mysqli_query($co,$q);
    $projects=[];

   while( $res=mysqli_fetch_assoc($query)){
    $projects[]=$res;
   }

    return $projects;}


    function deletepro($proid){
        $co=mysqli_connect("localhost","root","","portof");
        $q="DELETE FROM `portfolio` WHERE `id`='$proid'";
        $query=mysqli_query($co,$q);
    
        $res=mysqli_affected_rows($co);
        if(isset($res)){
            return true;
        }
        else{
            return false;
        }
    }    
    
function getportfolioBYid($id){
        $co=mysqli_connect("localhost","root","","portof");
        $q="SELECT * FROM `userportfolio` WHERE `id`='$id' ";
        $query=mysqli_query($co,$q);
        
    
       $res=mysqli_fetch_assoc($query);
    
        return $res;
    }

function updatePro($desc,$img,$id){
        $co=mysqli_connect("localhost","root","","portof");
        $q="UPDATE `portfolio` SET `descr`='$desc' ";
        if(!empty($img)){
            $q.="` img`='$img'";
        }
        $q.=" WHERE `id`=='$id' ";
        $query=mysqli_query($co,$q);
    
        $res=mysqli_affected_rows($co);
        if(isset($res)){
            return true;
        }
        else{
            return false;
        }
        
    }