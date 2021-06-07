<?php
/**
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * Documentation Model
 * @author nagara
 * @return function
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * 
 * pada view tidak perlu melakukan memanggil connection lagi cukup paggil controller saja, karena semua aktifitas
 * yang berkaitan dengan logic di definisikan ke dalam function yang di tulis pada controller pada view
 * cukup paggil function yang terdapat pada berkas controllernya
 * 
 * cheatsheet untuk fecth database : 
 * 
 * untuk single result :
 * fetch_object return object 
 * fetch_assoc return array 
 * 
 * untuk all result :
 * fetch_all(MYSQLI_ASSOC) return all row
 */



function get_all_data()
{
    # call connection ke database
    $conn = database();
    
    # query sintax pada database
    $sql = "SELECT * FROM transactions";
    
    # myqli execute
    $result = $conn->query($sql);

    #return data
    return $result->fetch_all(MYSQLI_ASSOC);
}

/**
 * docuemntations return singe data
 * @return object
 */

function get_single_data_by_condition($id)
{
    $conn = database();

    // sintac query 
    $sql = "SELECT * FROM users WHERE id=$id ";
    $result = $conn->query($sql);
    return $result->fetch_object();
}

function example_data(){
    $data = [
        "user" => "nagara",
        "hobbi" => "lazy and sleep"
    ];

   dump($data);
}
