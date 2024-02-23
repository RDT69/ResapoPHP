<?php
@$link = new mysqli('localhost', 'root', '', 'materials');
$error = $link->connect_error;
$sql = "SELECT * FROM imports";
$result = $link->query($sql);
$material = $result->fetch_all();
?>
<style>
  table {
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
}
</style>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>country</th>
      <th>material</th>
      <th>tons</th>
    </tr>
  </thead>
  <tbody> 
    <?php
    foreach($material as $materials){
      echo "<tr>";
      echo "<td>" . $materials[0] . "</td>";
      echo "<td>" . $materials[1] . "</td>";
      echo "<td>" . $materials[2] . "</td>";
      echo "<td>" . $materials[3] . "</td>";
      echo "<td> <input type='submit' name='delete' value='Eliminar'>" 
      ?>
      <?php
       if (isset($_GET['delete'])) {
         $id = $_GET['imports'];
       try {
        $sql = "DELETE FROM imports WHERE id = $id";
        $result = $link->query($sql);
        if($result) {
          echo "Material borrado";
        }
       } catch (Exception $e) {
        echo "Error: " . $sql . "<br>" . $link->error;
       }
        };
       ?>
       <?php
        echo "<a href='create.php'><input type='submit' value='Create'></a></td>";

      echo "</tr>";
    }
    ?>
  </tbody>

</table>