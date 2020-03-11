<?php

const SERVER = "146.83.198.35";// 146.83.198.35
const DB = "grupo6is_db";
const USER = "grupo6is"; // grupo6is
const PASS = "ISgrupo6";// ISgrupo6
const PORT = "5432";

const SGBD = "pgsql:host=".SERVER.";port=".PORT.";dbname=".DB;

date_default_timezone_set ("America/Santiago");

/* no se puede cambiar el valor */
const  METHOD = "AES-256-CBC";

/*se le puede dar valor a gusto*/
const SECRET_KEY = '$BP@2017';
const SECRET_IV = '101712';

