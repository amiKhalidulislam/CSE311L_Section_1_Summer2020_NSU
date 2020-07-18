$link = mysqli_connect('localhost','root','');

if($link==false)
{
      (die"Error: could not connect" .mysqli_connect_error());
}

$sql = CREATE ""