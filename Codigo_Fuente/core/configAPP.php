<?php

const SERVER = "localhost";// 146.83.198.35
const DB = "grupo6is_db";
const USER = "postgres"; // grupo6is
const PASS = "12345";// ISgrupo6
const PORT = "5432";

const SGBD = "pgsql:host=".SERVER.";port=".PORT.";dbname=".DB;

const COMPANY="GESTION PROYECTOS INGENIERIA DE SOFTWARE";
date_default_timezone_set ("America/Santiago");

/* no se puede cambiar el valor */
const  METHOD = "AES-256-CBC";

/*se le puede dar valor a gusto*/
const SECRET_KEY = '$BP@2017';
const SECRET_IV = '101712';

