<?php
        include 'main.php';
		$sql="SELECT PropertyID,UserID, Iam,Name,Mobile,Email,PropertyFor,PropertyType,City,Locality,Images,RSK_exclusivity,UploadTime FROM listproperty LIMIT $limit_view";
        $stmt=$conn->prepare($sql);


        $stmt->execute();
        $stmt->store_result();
        
        $stmt->bind_result($propertyID,$userID,$upl_type,$name,$mobile,$email,$for,$type,$city,$locality,$images,$rsk_excl,$updatedAt);
        while($stmt->fetch()){
            //echo $propertyID.$images.$city."<br>";
            

    $get_details="SELECT `PropTitle`, `PropPrice`, `BuildupArea`, `Configuration`, `PosessionStatus`, `Facing`, `CarpetArea`, `Bathrooms`, `Balcony`, `Bedrooms`, `Parking`, `About`, `UpdatedTime`
     FROM property_details WHERE PropertyID='$propertyID'";
    $prop_details=$conn->prepare($get_details);
    //$prop_details->bind_param("s",$p_propID);
      //      $p_propID=$propID;

        $prop_details->execute();
        $prop_details->store_result();
        
        $prop_details->bind_result($title,$price,$build_area,$config,$posession,$facing,$carpet_area,$bathrooms,$balcony,$bedrooms,$parking,$about,$lastupdated);
        $prop_details->fetch();
        if(empty($title)){
            $title="NA";
        }
        
        if(empty($price)){
            $price="NA";
        }
        if(empty($build_area)){
            $build_area="NA";
        }
        if(empty($config)){
            $config="NA";
        }
        if(empty($posession)){
            $posession="NA";
        }
        if(empty($facing)){
            $facing="NA";
        }
        if(empty($carpet_area)){
            $carpet_area="NA";
        }
        if(empty($bathrooms)){
            $bathrooms="NA";
        }
		if(empty($bedrooms)){
            $bedrooms="NA";
        }if(empty($parking)){
            $parking="NA";
        }if(empty($balcony)){
            $balcony="NA";
        }
        include 'property-card-small.php';
        $prop_details->close();
    }
    $stmt->close();
?>