[void][System.Reflection.Assembly]::LoadWithPartialName("MySql.data")
[string]$user = "sql12198005"
[string]$password="tYucSwvQ6X"
[string]$server="sql12.freesqldatabase.com"
[string]$dbname="sql12198005"
$con = New-Object MySql.Data.MySqlClient.MySqlConnection
$cs = "server=$($server);port=3306;database=$($dbname);uid=$($user);pwd=$($password)"
$con.ConnectionString = $cs
$con.open()
#query server
$query = "select * from Names;"
$cmd = New-Object MySql.Data.MySqlClient.MySqlCommand($query,$con)
$da = New-Object MySql.Data.MySqlClient.MySqlDataAdapter($cmd)
$ds = New-Object System.Data.DataSet
$Count = $da.Fill($ds,"data")
Write-Host $Count "total names"
$ds.Tables.Rows 
$con.Close()