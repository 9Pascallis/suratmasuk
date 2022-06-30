<?php 
session_start();
if (!isset($_SESSION["user"])) {
  echo "<script>alert('silahkan login dahulu');</script>";
  header("Location: login.php");
  exit;
}else{
  $role = $_SESSION["role"];
  $query = $_SESSION["query"];
  $queryAndFirst =$_SESSION["query_search_AND_FIRST"];
  $queryAndLast =$_SESSION["query_search_AND_LAST"];

}
?>