<?php
    session_start();
    if($_SESSION['id'] && $_SESSION['email'])
    {
        include("config.php");
        include("firebaseRDB.php");

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

        $datetime = date("d-m-Y h:i:sa");
        $uni = $_SESSION['id'];
        $email = $_SESSION['email'];
        $flag=1;
        $id = $_GET['id'];

        $db = new firebaseRDB($databaseURL);
        $data = $db->retrieve("logs");
        $data = json_decode($data, 1);

        foreach($productNames as $key => $val)
        {
            if($key==$id)
                $pname=$val;
        }
        foreach($productLinks as $key => $val)
        {
            if($key==$pname)
                $link=$val;
        }

        foreach($data as $id1 => $user)
        {
            if($id==$user['id'] && $user['userName']==$email)
            {
                $datetime1=$user['datetime'];
                $purid=$id1;
                $flag=0;
            }
        }

        if($flag)
        {
            $insert = $db->insert("logs", [
                "userName" => $email,
                "datetime" => $datetime,
                "proname" => $pname,
                "id" => $id
            ]);
        }
        else
        {
            $update = $db->update("logs", $purid, [
                "datetime" => $datetime
            ]);
        }
        ?>
        <script>
            window.location.href="<?php echo $link; ?>";
        </script>
        <?php
    }
?>