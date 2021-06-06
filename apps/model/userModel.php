<?php
/**
 * Documentation
 * @author nagara
 * 
 * fetch_object return object untuk single
 * fetch_assoc return array untuk single
 * 
 * fetch_all(MYSQLI_ASSOC) return all untk array
 * 
 */

 /**
  * docuemntations return set data 
 * @return array
 */

function get_all_data()
{
    $conn = database();
    
    // sintac query 
    $sql = "SELECT * FROM transactions";
    
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

/**
 * docuemntations return singe data
 * @return object
 */

function get_single_data_by_condition($id)
{
    global $conn;

    // sintac query 
    $sql = "SELECT * FROM tb_user WHERE id=$id ";
    $result = $conn->query($sql);
    return $result->fetch_object();
}

function example_data(){
    $data = [
        "user" => "nagara",
        "hobbi" => "lazy and sleep"
    ];

   var_dump($data);
}