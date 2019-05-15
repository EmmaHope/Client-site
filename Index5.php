<?php 
$a = "<html>
    <head>
        <title>Client Site</title>
        <meta charset='utf-8' lang='en'>
        <link href='Index.css' rel='stylesheet'> 
    </head>
    <body>
        <div class='nav'>
            <a href='Index.php' class='button'><em>Home</em></a>
            <a href='Index2.php' class='button'><em>About</em></a>
            <a href='Index3.php' class='button'><em>Collage</em></a>
            <a href='Index4.php' class='button'><em>Contact</em></a>
            <a href='Index5.php' class='button'><em>Pricing</em></a>
            </div>
    <h1>Pricing Options</h1>
    <h2>Family Package: $$</h2>
    <h2>Baby photos: $$</h2>
    <h2>Grad photos: $$</h2>
    <h2>Wedding photos: $$</h2>
    <form>
    <p><b><em>First Name:</em></b></p><br>
    <input type='text' name='firstname' value='John'><br>
    <p><b><em>Last Name:</em></b></p><br>
    <input type='text' name='lastname' value='Doe'><br>
    <p>
             <label>Select list</label>
             <select id = 'myList'>
               <option value = '1'>Family package</option>
               <option value = '2'>Baby photos</option>
               <option value = '3'>Grad photos</option>
               <option value = '4'>Wedding photos</option>
             </select>
          </p><br>
          <input type='submit' name='submit' value='submit'>
       </form> 
        <footer>
        <a href='https://www.facebook.com/lynette.p.pearson' target='_blank' class='button'>Facebook Link</a>
        </footer>
<script>
</script>
    </body>
</html>";

echo "$a";

    ?>