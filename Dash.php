
<?php
  session_start();
  if($_SESSION['email'])
  {
    $productNames = array (
        "11" => "Plug & Play Portable Biogas Plant",
        "12" => "Biogas Plants",
        "13" => "Fits in small area",
        "14" => "Storage Biogas Plant",
        "15" => "Commercial Biogas Plants",
        "16" => "Industrial Biogas Plant",
        "17" => "For Chemical Industry",
        "18" => "Biogas Storage Balloon",
        "19" => "SOLAR PANELS",
        "20" => "GREEN BATTERIES",
        "21" => "Solax Panels 3-6kW",
        "22" => "Small Commercial PV Arrays",
        "23" => "Harvesting More Energy 80-150kW",
    );

    $productLinks = array (
        "Plug & Play Portable Biogas Plant" => "https://www.indiamart.com/proddetail/plug-play-portable-biogas-plant-floating-type-molded-single-structure-for-5-10-people-14227860630.html",
        "Biogas Plants" => "https://www.indiamart.com/proddetail/domestic-biogas-plant-23142303448.html?pos=1&pla=n&blform=1",
        "Fits in small area" => "https://www.indiamart.com/proddetail/domestic-biogas-plant-22452880412.html",
        "Storage Biogas Plant" => "https://www.indiamart.com/proddetail/storage-biogas-plant-20349481291.html?pos=14&kwd=medium%20scale%20biogas%20plants&tags=A||||8038.904|Price|proxy|||TS|type=attr=1|attrS|attrMtch=1",
        "Commercial Biogas Plants" => "https://www.indiamart.com/proddetail/commercial-biogas-plant-22656365373.html?pos=5&pla=n",
        "Industrial Biogas Plant" => "https://www.indiamart.com/proddetail/industrial-biogas-plant-20395515255.html?pos=12&kwd=industrial%20biogas%20plants&tags=A||||8038.904||proxy|||TS|type=attr=1|attrS",
        "For Chemical Industry" => "https://www.indiamart.com/proddetail/industrial-biogas-plants-4289672655.html?pos=9&kwd=industrial%20biogas%20plants&tags=A||||8132.985|Price|product|||SSnp|type=attr=1|attrS|attrMtch=1",
        "Biogas Storage Balloon" => "https://www.indiamart.com/proddetail/biogas-holding-plant-22850504162.html?pos=2&pla=n",
        "SOLAR PANELS" => "",
        "GREEN BATTERIES" => "",
        "Solax Panels 3-6kW" => "https://www.solaxpower.com/x1-boost/",
        "Small Commercial PV Arrays" => "https://www.solaxpower.com/x3-mic-pro/",
        "Harvesting More Energy 80-150kW" => "https://www.solaxpower.com/x3-forth/",
    );
    $cnt=1;
    $uid=$_SESSION['id'];
    $email=$_SESSION['email'];
    include("config.php");
    include("firebaseRDB.php");
    $db = new firebaseRDB($databaseURL);
    $data = $db->retrieve("users");
    $data = json_decode($data, 1);

    $data1 = $db->retrieve("logs");
    $data1 = json_decode($data1, 1);

    foreach($data as $user)
    {
        if($user['email']==$email)
        {
            $name = $user['fname'] . " " . $user['lname'];
            $email = $user['email'];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Circle</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.cl12{
    background-color: #04AA6D;
    margin:10px;
    border:solid black;
    padding: 20px;
    border-radius:10px;
}
    </style>
</head>
<body>
    <section>
    <div id="about" class="about-us section">
      <div class="container">
        <div class="row">
            <div class="cl12">
                <div style="float:Right">
                    <button style="color:white"><a href="index.php">Home</a></button>
                </div>
                <div class="col-lg-6 align-self-center">
                    Name: <?php echo $name; ?><br>
                    Email: <?php echo $email; ?><br>
                </div>  
            </div>
            <hr>
            <div class="col-lg-6 align-self-center">
            <table id="customers">
                <tr>
                    <th>SR No</th>
                    <th>Product Name</th>
                    <th>Last Seen</th>
                    <th></th>
                </tr>
                <?php
                foreach($data1 as $log)
                {
                    if($log['userName']==$email)
                    {
                        $pid=$log['id'];
                        foreach($productNames as $key => $val)
                        {
                            if($key==$pid)
                                $pname=$val;
                        }
                        foreach($productLinks as $key => $val)
                        {
                            if($key==$pname)
                                $link=$val;
                        }
                        ?>
                        <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $log['proname']; ?></td>
                            <td><?php echo $log['datetime']; ?></td>
                            <td><button type="submit"><a href="<?php echo $link; ?>" target="_blank">Buy</a></button></td>
                        </tr>
                        <?php
                    }
                    $cnt++;
                }
                $cnt=1;
                ?>
                </table>
            </div>  
        </div>
    </div>
</body>
</html>
<?php
  }
?>