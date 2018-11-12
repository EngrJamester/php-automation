<?php 

    if(isset($_POST['getTempAndHumidity'])){
        $db = mysqli_connect("localhost","root","root","db_permentation");
        if($db)
        {
            $select = "Select * from controllers";
        
            $result = mysqli_query($db,$select);

            if($result->num_rows > 0)
            {
                $arr =  array();
                while($row = $result->fetch_assoc()){
                    array_push($arr,array('id'=> $row['id'],'temp' => $row['temperature'],'humid' => $row['humidity'],'thres' => $row['threshold']));
                }
                $data = array('ok'=> true,'data' => $arr);
                $data["json"] = json_encode($data);
                echo json_encode($data);
            }
            else
            {
                $data = array('ok'=> true,'temp' => 0 ,'humid' => 0 , 'message'=>'No rec');
                $data["json"] = json_encode($data);
                echo json_encode($data);
            }

            $db->close();
            
        
        }
        else
        {
            $data = array('ok' => true,'temp' => 0,'humid' => 0, 'message'=> $db->error);
            $data["json"] = json_encode($data);
            echo json_encode($data);
        }
    }

?>