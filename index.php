<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">

<form class="text-center">
    
<input type="radio" id="parking" name="parcheggio" value="parking"
          >
      <label for="parking">parking</label>


      <input type="radio" id="noparking" name="parcheggio" value="noparking"
             >
      <label for="noparking">No parking</label>
  
      <input type="submit">
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Votazione</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>

  <?php

$hotels = [

[
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
],
[
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
],
[
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
],
[
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
],
[
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
],

];



foreach ($hotels as $hotel) {
    
    echo "<tr>";
        echo "<td>" . $hotel["name"] . "</td>";
        echo "<td>" . $hotel["description"] . "</td>";
        echo "<td>" . $hotel["parking"] . "</td>";
        echo "<td>" . $hotel["vote"] . "</td>";
        echo "<td>" . $hotel["distance_to_center"] . "</td>";
    echo "</tr>";
}


?>
  </tbody>
</table>



</body>
</html>











