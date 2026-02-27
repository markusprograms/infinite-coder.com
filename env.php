<?php
    /**
     * "ENVIRONMENT" VARIABLES FOR THE WHOLE WEBSITE
     * 
     * This script sets secret variables for each scripts on the website. All scripts, 
     * that need to access secret variables must include this file. These varibles 
     * aren't environmental but just regular variables. 
     * 
     * Security alert: Any file on the website can include this file. Be careful with
     * user permissions. Always block this file from being imported by a POWER ON user.
     */

    $env = [
        "database_host" => "localhost", // Localhost in most cases. If you don't have a hosting plan with databases you can connect to an external one
        "database_user" => "ginfini2", // Username of the database owner
        "database_password" => "Mar1165kus", // Password of the user
        "database_name" => "ginfini2db" // Name of the database
    ];
?>