<!-- HOST=aws-sa-east-1.connect.psdb.cloud
USERNAME=pqum1uypejlb8aeamjqd
PASSWORD=pscale_pw_gLllMIBW0yPNmI2AwJYJ8ZA6FzaFkqjlVTkvIRSLmHt
DATABASE=crudventas -->

<?php


function con()
{
    $dsn = "mysql:host=aws-sa-east-1.connect.psdb.cloud;dbname=crudventas";
    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
    );
    $pdo = new PDO($dsn, "pqum1uypejlb8aeamjqd", "pscale_pw_gLllMIBW0yPNmI2AwJYJ8ZA6FzaFkqjlVTkvIRSLmHt", $options);
}

echo '<pre>';
con();
echo '</pre>';
?>