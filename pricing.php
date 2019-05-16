<html>
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
    <h2>Family Package: $100</h2>
    <h2>Baby photos: $50</h2>
    <h2>Grad photos: $70</h2>
    <h2>Wedding photos: $150</h2>
    <form method='post'>
    <?php 
$error ='';
$name ='';
$lastname ='';
$phonenumber ='';
$list ='';
function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

    echo "passed 1";
if(isset($_POST["submit"])){
    echo "passed 2";
    if(empty($_POST["firstname"])){
        $error .= '<p><label class="text-danger">Please enter your name</label></p>';
    }
    else{
        echo "passed 3";
        $name = clean_text($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $error = '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if(empty($_POST["lastname"])){
        $error .= '<p><label class="text-danger">Please enter your last name</label></p>';
    }
    else{
        echo "passed 4";
        $lastname = clean_text($_POST["lastname"]);
        if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
            $error = '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if(empty($_POST["phonenumber"])){
        $error .= '<p><label class="text-danger">Please enter your phone number</label></p>';
    }
    else {
        $phonenumber = clean_text($_POST["phonenumber"]);
    }
    if(empty($_POST["myList"])){
        $error .= '<p><label class="text-danger">Please choose an item</label></p>';
        
    }else{
        echo "passed 5";
        $list = clean_text($_POST["myList"]);   
    }
    if($error == ''){
        $file_open = fopen("contact_data.csv", "a");
        $no_rows = count(file("contact_data.csv"));
        if($no_rows > 1){
            $no_rows = ($no_rows - 1) + 1;
        }
        $form_data = array(
            'sr_no' => $no_rows,
            'name' => $name,
            'lastname' => $lastname,
            'phonenumber' => $phonenumber,
            'list' => $list
        );
        fputcsv($file_open, $form_data);
        $error = '<label class="text-success">Thanks for contacting me! I will get back to you ASAP!';
function toReset(){
        unset($_POST["submit"]);
        unset($_POST["firstname"]);
        unset($_POST["lastname"]);
        unset($_POST["phonenumber"]);
        unset($_POST["myList"]);
        }
        toReset();
    }
}

?>
   <?php echo $error; ?>
    <p><b><em>First Name:</em></b></p><br>
    <input type='text' name='firstname' placeholder='Enter Name' class='form-control'><br>
    <p><b><em>Last Name:</em></b></p><br>
    <input type='text' name='lastname' placeholder='Enter Last Name' class='form-control'><br>
    <p><b><em>Phone Number</em></b></p><br>
    <input type='text' name='phonenumber' placeholder='1234' class='form-control'><br>
    <p>
             <label>Select list</label>
             <select name='myList' class='form-control'>>
               <option value = 'Family_package'>Family package</option>
               <option value = 'Baby_photos'>Baby photos</option>
               <option value = 'Grad_photos'>Grad photos</option>
               <option value = 'Wedding_photos'>Wedding photos</option>
             </select>
          </p><br>
          <input type='submit' name='submit' value='submit' class='btn-btn-info'>
       </form> 
        <footer>
        <a href='https://www.facebook.com/lynette.p.pearson' target='_blank' class='button'>Facebook Link</a>
        </footer>
<script>
</script>
    </body>
</html>