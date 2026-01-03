<?php

include_once 'functions.php';

deleteEtudiant($_GET['id']);
header("Location: liste.php");
