<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['nivel']);

header('location: index.php');