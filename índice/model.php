<?php
//model.php
function open_database_connection()
{
    $link = mysqli_connect("localhost", "root", "", "ejeprue1_db");
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}
function close_database_connection($link)
{
    mysql_close($link);
}
function get_all_posts()
{
    $link =open_database_connection();
    $consulta = "SELECT id, title from libros";
    $result = mysqli_query($link, $consulta);
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

