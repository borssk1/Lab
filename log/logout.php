<?php
session_start();

// Usuwamy wszystkie dane sesji i kończymy sesję
session_destroy();

header("Location: login.php");
exit;
