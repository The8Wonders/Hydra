<?php

const SERVER = "localhost";
const DB = "sgp";
const USER = "root";
const PASS = "";

const SGBD = "mysql:host=" .SERVER . ";dbname=" .DB;

const COMPANY="GESTION PROYECTOS INGENIERIA DE SOFTWARE";
date_default_timezone_set ("America/Santiago");

/* no se puede cambiar el valor */
const  METHOD = "AES-256-CBC";

/*se le puede dar valor a gusto*/
const SECRET_KEY = '$BP@2017';
const SECRET_IV = '101712';

