<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 21:26
 */

require __DIR__."/Category.php";

$categoryId = $_GET['id'];

$data = new Category();
$data->deleteCategory($categoryId);

header('Location: ../index.php');
exit();