<?php
    $username = "qtenpa4jxqmdf3a5"; 
    $password = "nkurhpkwl99fd5cb";   
    $host = "ysp9sse09kl0tzxj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $database="w3wsmuclr9n3hzbo";
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "
SELECT color,COUNT(*) as count FROM Moods GROUP BY color ORDER BY count DESC;
";
    $query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    echo json_encode($data);     
     
    mysql_close($server);
?>