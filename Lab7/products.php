<html>
  <head>
    <title>Products</title>
  </head>
  <body>
    <form action="displayCheck.php" method="post" enctype="multipart/form-data" style="padding: 80px"> 
      <fieldset style="padding: 40px">
        <legend>PRODUCTS</legend>
        <table>
          <tr>
            <td>NAME</td>
            <td>PROFIT</td>
          </tr>
          <tr>
            <td><?php echo ""; ?></td>
            <td><?php echo ""; ?></td>
            <td><a href="editProduct.php">Edit</a></td>
            <td><a href="deleteProduct.php">Delete</a></td>
          </tr>
          <tr>
            <label for="sellPrice">Selling Price <br></label>
            <input type="number" name="sellPrice" value=""> <br>
          </tr>
          <tr>
            <hr>
            <input type="checkbox" name="display"> Display <br>
          </tr>
          <tr>
            <hr>
            <input type="submit" name="save" value="SAVE">
          </tr>
        </table>
      </fieldset>

    </form>
  </body>
</html>