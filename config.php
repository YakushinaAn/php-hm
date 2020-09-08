<?php

const SERVER = "localhost";
const DB = "base";
const LOGIN = "root";
const PASS = "root";


$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die ("Ошибка соединения с базой данных");