<?php

interface Logger{
    function logMessage($message);
}

class FileLogger implements Logger{
    function logMessage($message)
    {
        echo "File Logging: ".$message;
    }
}
class DatabaseLogger implements Logger
{
    function logMessage($message)
    {
        echo "Database Logging: " . $message;
    }
}


$logger1 = new FileLogger();
$logger2 = new DatabaseLogger();

$logger1->logMessage("File log example !<br>");
$logger2->logMessage("Database log example!<br>");

