<?php 
include "connection.php";
 ?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ELEGANT FLORA -The Florist Shop </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

<body>

  <div class="form-contain">

      <div class="col-lg-8" >

        <button class="hmbtn" onclick="window.location.href='../index.html';"><i class="fa fa-home"></i></button><!-- Home Button-->

        <div class="form-popup" id="myForm">
        
        <form action="" name="maintenance" method="POST">

          <h2>Flower Stores</h2>

          <div class="form-group">
            <label for="pid">Product Identification Number :</label>
            <input type="text" class="form-control" placeholder="Product ID" name="pid" required>
          </div>

          <div class="form-group">
            <label for="type">Product Type :</label>
              <select class="select" name="type" id="type">
              <option value="select">Product Type</option>
              <option value="Wreath">Wreath</option>
              <option value="Bouqutes">Bouqutes</option>
              <option value="othe decorations">Other Decos</option>
          </select>
          </div>

          <div class="form-group">
            <label for="price">Price of the Product :</label>
            <input type="number" class="form-control" placeholder="Product Price" name="price" >
          </div>

          <div class="form-group">
            <label for="supplier">Supplier of the Product :</label>
            <input type="text" class="form-control" placeholder="Produt Seller" name="supplier" >
          </div>

          <div class="form-group">
            <label for="amount">Amount :</label>
            <input type="number" class="form-control" placeholder="Amount Available" name="amount" >
          </div>

          <div class="form-group">
            <label for="expire">Expiary Date :</label>
            <input type="date" class="form-control" placeholder="Date of expire" name="exp" >
          </div>

          <div class="form-group">
            <label for="reorder">Reorder Level :</label>
            <input type="number" class="form-control" placeholder="Reorder Level" name="reorder" >
          </div>

          <button class="btn" type="submit" name="add" >ADD</button>

          <button type="submit" name="remove" class="btn" id="remove">SELL</button>

          <button name="reorder" class="btn" id="reorder" onclick="window.location.href='../orders.html';">REORDER</button>

          </div>
        </form>
      </div>
      </div>
  </div>

      <div class="col-lg-12">
        <table class="table table-condensed">
          <thead>
            <tr>
              <th>Product Id</th>
              <th>Product Type</th>
              <th>Price</th>
              <th>Supplier</th>
              <th>Amount</th>
              <th>Expiary Date</th>
              <th>Reorder Amount</th>
            </tr>
          </thead>
          <tbody>
            
            <?php 
                $res = mysqli_query($link, "select * from flower");
                while ($row=mysqli_fetch_array($res))
                {
                  echo "<tr>";
                  echo "<td>"; echo $row["id"]; echo "</td>";
                  echo "<td>"; echo $row["type"]; echo "</td>";
                  echo "<td>"; echo $row["price"]; echo "</td>";
                  echo "<td>"; echo $row["supplier"]; echo "</td>";
                  echo "<td>"; echo $row["amount"]; echo "</td>";
                  echo "<td>"; echo $row["exp_date"]; echo "</td>";
                  echo "<td>"; echo $row["reorder"]; echo "</td>";

                  echo "</tr>";

                }

             ?>

          </tbody>
        </table>
        
       
      </div>
    <style type="text/css">
      .form-contain{
        background: #dddddd;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
      }
      .form-popup{
          position: relative;
          width: 100%;
          padding: 20px;
          padding-left: 50px;
          overflow: hidden;
          padding-left: 100px;
          border: 3px solid #f1f1f1;
          z-index: 9;
        }

    </style>

</body>
</html>

<?php 

if (isset ($_POST ["add"])) {

  mysqli_query($link, "INSERT INTO flower VALUES ('$_POST[pid]', '$_POST[type]', '$_POST[price]', '$_POST[supplier]', '$_POST[amount]', '$_POST[exp]', '$_POST[reorder]')") or die(mysqli_error($link));
?>
<script type="text/javascript">
  window.location.href=window.location.href;
</script>
<?php 

}

if (isset ($_POST ["remove"])) {

  //mysqli_query($link, "DELETE FROM flower WHERE id='$_POST[pid]'") or die(mysqli_error($link));
  //UPDATE products SET customfield_value = customfield_value - 1 WHERE custom_id = 22;

    mysqli_query($link, "UPDATE flower SET amount = amount - 1 WHERE id='$_POST[pid]'") or die(mysqli_error($link));



  ?>
<script type="text/javascript">
  window.location.href=window.location.href;
</script>
<?php 
}
 ?>