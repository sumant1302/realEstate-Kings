<?php
    session_start();
    include 'main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="real, estate, rpoperties, patna, bihar, buy, rent, house, apartments,room, sell, property">
	<title>Buy Property|RSK</title>
	<link rel="stylesheet" type="text/css" href="rsk-web.css">
	<link rel="icon" type="image/png" href="images/rsk-icon.png"/>	
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include 'header.php';
    include 'modals.php';
?>
<style>
	.prop-page{
	background: #7fff00;
	width: 100%;
	height: 100%;
}
</style>
<div class="buy-top" style="display: inline-flex; align-items: center; justify-content: center; width: 100%; position: relative; height: 200px; background-image: url('images/real-estate1.png'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
    <h1 style="color: rgb(243, 237, 237); text-align: center;padding: 2%; margin: 0; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.4);">Buy/Rent Property</h1>
    </div>
    <style>
            h1{
                font-size: 300%;
            }
            @media screen and (max-width: 600px) {
                h1{
                    font-size: 250%;
                }
            }
        </style>
        
        <?php 
            include 'sell-ad.php';
        ?>
<div class="page-no" style="margin:10px;">
    <div class="buy-page-no" style="text-align:center;">
        <button>&#8592;</button>
        <button class="active"><a href="buy-property.htm">1</a></button>
        <button><a href="buy-property.htm">2</a></button>
        <button><a href="buy-property.htm">3</a></button>
        <button><a href="buy-property.htm">4</a></button>
        <button>&#8594;</button>
    </div>
</div>

	<div class="buy-property-list" style="display: inline-flex; align-items: center; justify-content: center; width: 100%;">
        <div class="buy-property-flex" style="max-width: 1000px; background-color: white; margin: 1%;">
            <div class="buy-sort" style="display: inline-flex; width: 100%;">
            <div class="buy-location" style="width: 50%; display: inline-block;">
                Location: <select class="sort" name="sort" id="sort">
                    <option value="patna">Patna</option>
                    <option value="patna">Patna</option>
                    <option value="patna">Patna</option>
                    <option value="patna">Patna</option>
                    <option value="patna">Patna</option>
                    <option value="patna">Patna</option>

                </select>
            </div>
            
            <div class="property-sort" style="width: 50%; display: inline-block;">
                Sort By: <select class="sort" name="sort" id="sort">
                    <option value="popular">Popular</option>
                    <option value="relevance">Relevance</option>
                    <option value="price">Price</option>
                    <option value="nearby">Nearby</option>

                </select>
            </div>
            
            </div>
            <style>
                select.sort{
                    height: 30px;
                    cursor: pointer;
                }
                
                div.buy-location{
                    text-align:left;
                    padding: 2%;
                    margin-bottom: 0;
                    padding-bottom: 0;
                }

                div.property-sort{
                    text-align:right;
                    padding: 2%;
                    margin-bottom: 0;
                    padding-bottom: 0;
                }
            </style>
  
  <?php
        $sql="SELECT PropertyID,UserID, Iam,Name,Mobile,Email,PropertyFor,PropertyType,City,Locality,Images,RSK_exclusivity,UploadTime FROM listproperty";
        $stmt=$conn->prepare($sql);


        $stmt->execute();
        $stmt->store_result();
        
        $stmt->bind_result($propID,$userID,$upl_type,$name,$mobile,$email,$for,$type,$city,$locality,$images,$rsk_excl,$updatedAt);
        while($stmt->fetch()){
            echo $propID.$images.$city."<br>";
            

    $get_details="SELECT `PropTitle`, `PropPrice`, `BuildupArea`, `Configuration`, `PosessionStatus`, `Facing`, `CarpetArea`, `Bathrooms`, `Balcony`, `Bedrooms`, `Parking`, `About`, `UpdatedTime`
     FROM property_details WHERE PropertyID='$propID'";
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
            $title="NA";
        }
        if(empty($bathrooms)){
            $title="NA";
        }
?>



            <div class="buy-property">
        <div class="buy-property-top">
            <div class="property-button card" onclick="window.open('buy-property-view.php?propID=<?php echo $propID ?>')">
                <div class="property-all-details">
                <div class="property-pic">
                    <img src="<?php echo "images/".$images; ?>" alt="prop-pic">
                </div>
                <div class="buy-property-right">
                    <div class="buy-property-right-up">
                <div class="property-price">
                   <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; <?php echo $price; ?></b></p>
                </div>
                <div class="property-name" style="display: inline-flex;">
                    <div class="property-name-bold"><h3 style="color: black ;margin: 0;"><?php echo $title; ?></h3></div>
                    <div class="for-sale-rent" style="padding-left: 5px;"><i>for <?php echo $for; ?>..</i></div>
                </div>
                <div class="property-address">
                    <p style="margin-top: 0;"><?php echo $city; ?></p>
                </div>

                
                
                <div class="about-property">
                    <div class="about-property-1">
                        <div class="buildup-area">
                            <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                        </div>
                        <div class="area-value">
                            <p style="color: black;"><?php echo $build_area; ?></p>
                        </div>
                    </div>
                    <div class="about-property-2">
                        <div class="avg-price">
                            <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                        </div>
                        <div class="avg-value">
                            <p style="color: black;"><?php
                            $avg_price="";
                            if($build_area!=0 && $price!=0 && is_numeric($price) && is_numeric($build_area)) {
                            $avg_price=$price/$build_area;
                            }
                            echo number_format((float)$avg_price, 2, '.', '');;
                            ?></p>
                        </div>
                    </div>
                </div>
                    <div class="nearby-property">
                        <p style="color: rgb(126, 110, 110);">Property near <?php echo $locality.$city; ?></p>
                    </div>
                    <div>
                    <h4 style="margin: 0;">About</h4>
                    <p style="margin:0;">Looking for a <?php echo $title; ?> for <?php echo $for; ?> in <?php echo $city; ?>? Your search ends here. Buy this <?php echo $config; ?> property in <?php echo $city."'s"; ?> finest location, Dan.... <i style="color: teal;">Read More</i></p>
                    </div>
                </div>
                <div class="buy-property-right-down">
                <hr>
                <div class="about-seller">
                    <div class="seller-details">
                        <div class="seller-pic">
                            <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                        </div>
                        <div class="seller-name-type">
                            <div class="seller-name">
                                <p style="color: black; text-transform: uppercase;"><?php echo $name; ?></p>
                            </div>
                            <div class="seller-type">
                                <p style="color: rgb(129, 114, 114);"><?php echo $upl_type; ?></p>
                            </div>
                        </div>
                        </div>

                            <div class="seller-contact">
                                <button class="seller-contact">Contact</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


            <?php
            $prop_details->close();
        }
        $stmt->close();
?>
 
	<div class="buy-property">
        <div class="buy-property-top">
            <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                <div class="property-all-details">
                <div class="property-pic">
                    <img src="<?php echo "images/".$images; ?>" alt="prop-pic">
                </div>
                <div class="buy-property-right">
                    <div class="buy-property-right-up">
                <div class="property-price">
                   <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                </div>
                <div class="property-name" style="display: inline-flex;">
                    <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                    <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                </div>
                <div class="property-address">
                    <p style="margin-top: 0;"><?php echo $city; ?></p>
                </div>

                
                
                <div class="about-property">
                    <div class="about-property-1">
                        <div class="buildup-area">
                            <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                        </div>
                        <div class="area-value">
                            <p style="color: black;">1300 sq. ft</p>
                        </div>
                    </div>
                    <div class="about-property-2">
                        <div class="avg-price">
                            <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                        </div>
                        <div class="avg-value">
                            <p style="color: black;">9.23 K sq/ft</p>
                        </div>
                    </div>
                </div>
                    <div class="nearby-property">
                        <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                    </div>
                    <div>
                    <h4 style="margin: 0;">About</h4>
                    <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                    </div>
                </div>
                <div class="buy-property-right-down">
                <hr>
                <div class="about-seller">
                    <div class="seller-details">
                        <div class="seller-pic">
                            <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                        </div>
                        <div class="seller-name-type">
                            <div class="seller-name">
                                <p style="color: black; text-transform: uppercase;">Sumant</p>
                            </div>
                            <div class="seller-type">
                                <p style="color: rgb(129, 114, 114);">Agent</p>
                            </div>
                        </div>
                        </div>

                            <div class="seller-contact">
                                <button class="seller-contact">Contact</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

<div class="buy-property">
        <div class="buy-property-top">
            <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                <div class="property-all-details">
                <div class="property-pic">
                    <img src="images/real-estate-kings.jpg" alt="pic">
                </div>
                <div class="buy-property-right">
                    <div class="buy-property-right-up">
                <div class="property-price">
                   <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                </div>
                <div class="property-name" style="display: inline-flex;">
                    <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                    <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                </div>
                <div class="property-address">
                    <p style="margin-top: 0;">Patna, Bihar</p>
                </div>

                
                
                <div class="about-property">
                    <div class="about-property-1">
                        <div class="buildup-area">
                            <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                        </div>
                        <div class="area-value">
                            <p style="color: black;">1300 sq. ft</p>
                        </div>
                    </div>
                    <div class="about-property-2">
                        <div class="avg-price">
                            <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                        </div>
                        <div class="avg-value">
                            <p style="color: black;">9.23 K sq/ft</p>
                        </div>
                    </div>
                </div>
                    <div class="nearby-property">
                        <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                    </div>
                    <div>
                    <h4 style="margin: 0;">About</h4>
                    <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                    </div>
                </div>
                <div class="buy-property-right-down">
                <hr>
                <div class="about-seller">
                    <div class="seller-details">
                        <div class="seller-pic">
                            <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                        </div>
                        <div class="seller-name-type">
                            <div class="seller-name">
                                <p style="color: black; text-transform: uppercase;">Sumant</p>
                            </div>
                            <div class="seller-type">
                                <p style="color: rgb(129, 114, 114);">Agent</p>
                            </div>
                        </div>
                        </div>

                            <div class="seller-contact">
                                <button class="seller-contact">Contact</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="buy-property">
            <div class="buy-property-top">
                <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                    <div class="property-all-details">
                    <div class="property-pic">
                        <img src="images/real-estate-kings.jpg" alt="pic">
                    </div>
                    <div class="buy-property-right">
                        <div class="buy-property-right-up">
                    <div class="property-price">
                       <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                    </div>
                    <div class="property-name" style="display: inline-flex;">
                        <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                        <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                    </div>
                    <div class="property-address">
                        <p style="margin-top: 0;">Patna, Bihar</p>
                    </div>
    
                    
                    
                    <div class="about-property">
                        <div class="about-property-1">
                            <div class="buildup-area">
                                <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                            </div>
                            <div class="area-value">
                                <p style="color: black;">1300 sq. ft</p>
                            </div>
                        </div>
                        <div class="about-property-2">
                            <div class="avg-price">
                                <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                            </div>
                            <div class="avg-value">
                                <p style="color: black;">9.23 K sq/ft</p>
                            </div>
                        </div>
                    </div>
                        <div class="nearby-property">
                            <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                        </div>
                        <div>
                        <h4 style="margin: 0;">About</h4>
                        <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                        </div>
                    </div>
                    <div class="buy-property-right-down">
                    <hr>
                    <div class="about-seller">
                        <div class="seller-details">
                            <div class="seller-pic">
                                <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                            </div>
                            <div class="seller-name-type">
                                <div class="seller-name">
                                    <p style="color: black; text-transform: uppercase;">Sumant</p>
                                </div>
                                <div class="seller-type">
                                    <p style="color: rgb(129, 114, 114);">Agent</p>
                                </div>
                            </div>
                            </div>
    
                                <div class="seller-contact">
                                    <button class="seller-contact">Contact</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="buy-property">
                <div class="buy-property-top">
                    <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                        <div class="property-all-details">
                        <div class="property-pic">
                            <img src="images/real-estate-kings.jpg" alt="pic">
                        </div>
                        <div class="buy-property-right">
                            <div class="buy-property-right-up">
                        <div class="property-price">
                           <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                        </div>
                        <div class="property-name" style="display: inline-flex;">
                            <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                            <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                        </div>
                        <div class="property-address">
                            <p style="margin-top: 0;">Patna, Bihar</p>
                        </div>
        
                        
                        
                        <div class="about-property">
                            <div class="about-property-1">
                                <div class="buildup-area">
                                    <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                                </div>
                                <div class="area-value">
                                    <p style="color: black;">1300 sq. ft</p>
                                </div>
                            </div>
                            <div class="about-property-2">
                                <div class="avg-price">
                                    <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                                </div>
                                <div class="avg-value">
                                    <p style="color: black;">9.23 K sq/ft</p>
                                </div>
                            </div>
                        </div>
                            <div class="nearby-property">
                                <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                            </div>
                            <div>
                            <h4 style="margin: 0;">About</h4>
                            <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                            </div>
                        </div>
                        <div class="buy-property-right-down">
                        <hr>
                        <div class="about-seller">
                            <div class="seller-details">
                                <div class="seller-pic">
                                    <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                                </div>
                                <div class="seller-name-type">
                                    <div class="seller-name">
                                        <p style="color: black; text-transform: uppercase;">Sumant</p>
                                    </div>
                                    <div class="seller-type">
                                        <p style="color: rgb(129, 114, 114);">Agent</p>
                                    </div>
                                </div>
                                </div>
        
                                    <div class="seller-contact">
                                        <button class="seller-contact">Contact</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="buy-property">
                    <div class="buy-property-top">
                        <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                            <div class="property-all-details">
                            <div class="property-pic">
                                <img src="images/real-estate-kings.jpg" alt="pic">
                            </div>
                            <div class="buy-property-right">
                                <div class="buy-property-right-up">
                            <div class="property-price">
                               <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                            </div>
                            <div class="property-name" style="display: inline-flex;">
                                <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                                <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                            </div>
                            <div class="property-address">
                                <p style="margin-top: 0;">Patna, Bihar</p>
                            </div>
            
                            
                            
                            <div class="about-property">
                                <div class="about-property-1">
                                    <div class="buildup-area">
                                        <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                                    </div>
                                    <div class="area-value">
                                        <p style="color: black;">1300 sq. ft</p>
                                    </div>
                                </div>
                                <div class="about-property-2">
                                    <div class="avg-price">
                                        <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                                    </div>
                                    <div class="avg-value">
                                        <p style="color: black;">9.23 K sq/ft</p>
                                    </div>
                                </div>
                            </div>
                                <div class="nearby-property">
                                    <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                                </div>
                                <div>
                                <h4 style="margin: 0;">About</h4>
                                <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                                </div>
                            </div>
                            <div class="buy-property-right-down">
                            <hr>
                            <div class="about-seller">
                                <div class="seller-details">
                                    <div class="seller-pic">
                                        <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                                    </div>
                                    <div class="seller-name-type">
                                        <div class="seller-name">
                                            <p style="color: black; text-transform: uppercase;">Sumant</p>
                                        </div>
                                        <div class="seller-type">
                                            <p style="color: rgb(129, 114, 114);">Agent</p>
                                        </div>
                                    </div>
                                    </div>
            
                                        <div class="seller-contact">
                                            <button class="seller-contact">Contact</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            
                    <div class="buy-property">
                        <div class="buy-property-top">
                            <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                                <div class="property-all-details">
                                <div class="property-pic">
                                    <img src="images/real-estate-kings.jpg" alt="pic">
                                </div>
                                <div class="buy-property-right">
                                    <div class="buy-property-right-up">
                                <div class="property-price">
                                   <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                                </div>
                                <div class="property-name" style="display: inline-flex;">
                                    <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                                    <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                                </div>
                                <div class="property-address">
                                    <p style="margin-top: 0;">Patna, Bihar</p>
                                </div>
                
                                
                                
                                <div class="about-property">
                                    <div class="about-property-1">
                                        <div class="buildup-area">
                                            <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                                        </div>
                                        <div class="area-value">
                                            <p style="color: black;">1300 sq. ft</p>
                                        </div>
                                    </div>
                                    <div class="about-property-2">
                                        <div class="avg-price">
                                            <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                                        </div>
                                        <div class="avg-value">
                                            <p style="color: black;">9.23 K sq/ft</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="nearby-property">
                                        <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                                    </div>
                                    <div>
                                    <h4 style="margin: 0;">About</h4>
                                    <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                                    </div>
                                </div>
                                <div class="buy-property-right-down">
                                <hr>
                                <div class="about-seller">
                                    <div class="seller-details">
                                        <div class="seller-pic">
                                            <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                                        </div>
                                        <div class="seller-name-type">
                                            <div class="seller-name">
                                                <p style="color: black; text-transform: uppercase;">Sumant</p>
                                            </div>
                                            <div class="seller-type">
                                                <p style="color: rgb(129, 114, 114);">Agent</p>
                                            </div>
                                        </div>
                                        </div>
                
                                            <div class="seller-contact">
                                                <button class="seller-contact">Contact</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="buy-property">
                            <div class="buy-property-top">
                                <div class="property-button card" onclick="window.open('buy-property-view.htm')">
                                    <div class="property-all-details">
                                    <div class="property-pic">
                                        <img src="images/real-estate-kings.jpg" alt="pic">
                                    </div>
                                    <div class="buy-property-right">
                                        <div class="buy-property-right-up">
                                    <div class="property-price">
                                       <p style="margin-top: 0;"><b style="color: blue;">&#x20B9; 67.6L</b></p>
                                    </div>
                                    <div class="property-name" style="display: inline-flex;">
                                        <div class="property-name-bold"><h3 style="color: black ;margin: 0;">3-BHK Super Deluxe House</h3></div>
                                        <div class="for-sale-rent" style="padding-left: 5px;"><i>for SALE..</i></div>
                                    </div>
                                    <div class="property-address">
                                        <p style="margin-top: 0;">Patna, Bihar</p>
                                    </div>
                    
                                    
                                    
                                    <div class="about-property">
                                        <div class="about-property-1">
                                            <div class="buildup-area">
                                                <p style="color: rgb(172, 162, 162);">Build Up Area</p>
                                            </div>
                                            <div class="area-value">
                                                <p style="color: black;">1300 sq. ft</p>
                                            </div>
                                        </div>
                                        <div class="about-property-2">
                                            <div class="avg-price">
                                                <p style="color: rgb(172, 162, 162);">Avg. Price</p>
                                            </div>
                                            <div class="avg-value">
                                                <p style="color: black;">9.23 K sq/ft</p>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="nearby-property">
                                            <p style="color: rgb(126, 110, 110);">Property near Danapur, Patna</p>
                                        </div>
                                        <div>
                                        <h4 style="margin: 0;">About</h4>
                                        <p style="margin:0;">Looking for a 3 BHK Independent House for sale in Patna? Your search ends here. Buy this 3 BHK property in Patna's finest location, Dan.... <i style="color: teal;">Read More</i></p>
                                        </div>
                                    </div>
                                    <div class="buy-property-right-down">
                                    <hr>
                                    <div class="about-seller">
                                        <div class="seller-details">
                                            <div class="seller-pic">
                                                <img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
                                            </div>
                                            <div class="seller-name-type">
                                                <div class="seller-name">
                                                    <p style="color: black; text-transform: uppercase;">Sumant</p>
                                                </div>
                                                <div class="seller-type">
                                                    <p style="color: rgb(129, 114, 114);">Agent</p>
                                                </div>
                                            </div>
                                            </div>
                    
                                                <div class="seller-contact">
                                                    <button class="seller-contact">Contact</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                                    
                </div>
        </div>

        
        <div class="page-no" style="margin:10px;">
            <div class="buy-page-no" style="text-align:center;">
                <button>&#8592;</button>
                <button class="active"><a href="buy-property.htm">1</a></button>
                <button><a href="buy-property.htm">2</a></button>
                <button><a href="buy-property.htm">3</a></button>
                <button><a href="buy-property.htm">4</a></button>
                <button>&#8594;</button>
            </div>
        </div>

        <?php 
            include 'sell-ad.php';
        ?>
<style>
    div.page-no button{
        border: none;
        height: 30px;
        width: 30px;
        background-color:rgb(250, 249, 248);
        border-radius: 50%;
        cursor: pointer;
    }
    
    div.page-no button.active{
        background-color: chartreuse;
    }
    div.page-no button:hover{
        background-color: chartreuse;
    }
    div.buy-property{
    width: 100%;
}
div.buy-property-top{
    width: 90%;
    margin: 2% auto;
}
div.property-button{
    width: 100%;
    height: 300px;
    background-color: rgba(36, 44, 90, 0.2);
    cursor: pointer;
}
div.property-pic{
    width: 30%;
    height: 300px;
    margin: 0;
    padding:0;
}
div.buy-property-right{
    width: 70%;
    height: 100%;
    display: block;
    padding: 0 2%;
}
div.property-pic img{
    width: 100%;
    height: 100%;
}
div.property-all-details{
    width: 100%;
    height: 100%;
    display: inline-flex;
}

    div.about-property{
        display: inline-flex;
    }
    div.about-property-2{
     margin-left: 10px;;
    }
    div.buy-property-right-up{
        display: block;
        height: 80%;
        bottom:0;
        padding-top: 2%;
    }
    div.buy-property-right-down{
        height: 20%;
        display: block;
        bottom:0;
    }
     div.about-seller{
        width: 100%;
        display: inline-flex;
     }
     div.seller-details, div.seller-contact{
         width: 50%;
     }
     div.seller-details{
        display: inline-flex;

     }
     div.seller-name-type{
         display: block;
     }
     div.seller-pic{
         max-width: 40px;
         max-height: 40px;
     }
     div.seller-name p, div.seller-type p, div.buildup-area p,
     div.avg-price p, div.area-value p, div.avg-value p{
         margin: 0;
         padding: 0;
     }
     button.seller-contact{
         float: right;
         margin: auto;
         border: none;
         background-color: rgb(46, 175, 154);
         color:black;
         width: 60px;
         height: 25px;
         cursor: pointer;
     }
</style>

	<style>
		span.check-circle{
			font-size: 90%;
			color: yellowgreen;
		}
		div.all-details{
			max-width: 800px;
		}
		/*style for similer properties buttons*/
	 div select.property-type{
			width: 50%;
			padding: 1%;
			margin: 1%;
			font-size: 90%;
			border: none;
			border-bottom: 1px solid rgb(1,1,1);
			padding-bottom: 0;
			cursor: pointer;
			
		}

	 div.contact-seller-form input[type=text],input[type=tel],input[type=email], textarea{
			width: 90%;
			border: none;
			border-bottom: 1px solid rgb(1,1,1);
			margin: 1.5% 0;
			padding: 0;
			outline: none;
			font-size: 105%;
		}
		div.contact-seller-form input[type=submit]{
			position: relative;
			text-align: center;
			background-color: rgb(30, 219, 71);
			border: none;
			width: 100%;
			font-size: 110%;;
			line-height: 30px;
			margin:4% 0;
			border-radius: 5px;
		}
		div.contact-seller-form input[type=submit]:hover{
			opacity: 0.9;
			cursor: pointer;
		}
		div.contact-seller-form input[type=checkbox]{
			margin-left: 2%;
			margin-top: 1%;
		}

	</style>
<?php
    include 'foot.php';
?>
</body>
</html>