<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <table class="table table-hover table-border table-striped">
    <thead>
      <tr>
        <td>id</td>
        <td>Names</td>
        <td>phone</td>
        <td>email</td>
        <td>choice</td>
        <td>Message</td>
      </tr>
    </thead>
    <tbody>
      <?php
      include("connection.php");
   $sql =" SELECT * FROM frank";
   $result = $conn->query($sql);
   if(!$result){
    die ("invalid query" . $conn ->error); } 
    
    while($row = $result->fetch_assoc()){

      echo "
      <tr>
      <td>".$row['id'] ."</td>;
      <td>".$row['names'] ."</td>;
      <td>".$row['phone'] ."</td>;
      <td>".$row['email'] ."</td>;
      <td>".$row['choice'] ."</td>;
      <td>".$row['summary'] ."</td>;
      </tr>
      
      ";
    }
    
    ?>



    </tbody>
  </table>
</body>

</html>