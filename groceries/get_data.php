<?php include("connect.php");
//display select box value////
if(isset($_POST['stateid']))
{
 $id=$_POST['stateid'];
  
 $stmt = mysql_query("SELECT * FROM states WHERE country_id='$id'");
 ?><option selected="selected">Select State :</option><?php
 while($row=mysql_fetch_assoc($stmt))
 {
  ?>
        <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
        <?php
 }
}
if(isset($_POST['cityid']))
{
 $ids=$_POST['cityid'];
 $stmts = mysql_query("SELECT * FROM cities WHERE state_id='$ids'");
 ?><option selected="selected">Select City :</option><?php
 while($rows=mysql_fetch_assoc($stmts))
 {
  ?>
  <option value="<?php echo $rows['city_id']; ?>"><?php echo $rows['city_name']; ?></option>
  <?php
 }
}
?>

<?php
///display subcat value////
if(isset($_POST['cat'])){
    $id_val=$_POST['cat'];
    $rs=mysql_query("select * from sub_category where c_id='$id_val'");
    if($rs && mysql_num_rows($rs)>0)
    {
?>
    <div class="submenu" id="hide">
        <ul id="ajax_subcat_val">
        <?php
            while($data = mysql_fetch_array($rs)){
            $id_val= $data['c_id'];
            $id_val1= $data['sc_id'];
        ?> 
            <li class="active" data-interest="<?php echo $id_val1; ?>" id="activate">
                <a href="#" onclick="subcat('<?php echo $id_val; ?>','<?php echo $id_val1; ?>')" id="subcat_val" >
                    <?php echo $data['sc_name'];?>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
<?php } } ?>

<?php
//for grid view////

if(isset($_POST['cat_value'])){
    $cid=$_POST['cat_value'];
    $scid=$_POST['sub_cat'];
    $pro=mysql_query("select * from products where c_id='$cid' && sc_id='$scid'");
        while($pro_items=mysql_fetch_array($pro))
        {
          echo '<div class="col-sm-2" id="data">';
                echo '<div id="img"><img src="data:image/jpeg;base64,'.base64_encode( $pro_items['p_image'] ).'"></div>';
                echo '<div class="name"><h3>'.$pro_items['p_name'].'</h3></div>';
                echo'<div class="price"><h3>'.'Price : '.'&#8377; '.$pro_items['p_price'].'</h3></div>';
                echo '<div class="desc">';?>
                <input type="submit" value="Buy Now" class="btn" onclick="addtocart(<?= $pro_items['p_id'];?>)">
                <?php echo '</div></div>';
        }
}

///for select country state city /////
if(isset($_POST['cat_val']) && isset($_POST['subcat_val']) && isset($_POST['country'])){
    $cat_id=$_POST['cat_val'];
    $subcat_id=$_POST['subcat_val'];
    $country_code=$_POST['country'];
    $product=mysql_query("select * from products where c_id='$cat_id' and sc_id='$subcat_id' and country='$country_code'");
        while($item=mysql_fetch_array($product))
        {
                echo '<div class="col-sm-2" id="data">';
                echo '<div id="img"><img src="data:image/jpeg;base64,'.base64_encode( $item['p_image'] ).'"></div>';
                echo '<div class="name"><h3>'.$item['p_name'].'</h3></div>';
                echo'<div class="price"><h3>'.'Price : '.'&#8377; '.$item['p_price'].'</h3></div>';
                echo '<div class="desc">';?>
                <input type="submit" value="Buy Now" class="btn" onclick="addtocart(<?=$item['p_id']?>)">
                <?php echo '</div></div>';
        }
}
if(isset($_POST['cat_val']) && isset($_POST['subcat_val']) && isset($_POST['state_id']) && isset($_POST['country_id'])){
    $cat_id=$_POST['cat_val'];
    $subcat_id=$_POST['subcat_val'];
    $state_code=$_POST['state_id'];
    $country_code=$_POST['country_id'];
    $product=mysql_query("select * from products where c_id='$cat_id' and sc_id='$subcat_id' and country='$country_code' and state='$state_code'");
        while($item=mysql_fetch_array($product))
        {
                echo '<div class="col-sm-2" id="data">';
                echo '<div id="img"><img src="data:image/jpeg;base64,'.base64_encode( $item['p_image'] ).'"></div>';
                echo '<div class="name"><h3>'.$item['p_name'].'</h3></div>';
                echo'<div class="price"><h3>'.'Price : '.'&#8377; '.$item['p_price'].'</h3></div>';
                echo '<div class="desc">';?>
                <input type="submit" value="Buy Now" class="btn" onclick="addtocart(<?=$item['p_id']?>)">
                <?php echo '</div></div>';
        }
}
if(isset($_POST['cat_val']) && isset($_POST['subcat_val']) && isset($_POST['city_ids']) && isset($_POST['state_ids']) && isset($_POST['country_ids'])){
    $cat_id=$_POST['cat_val'];
    $subcat_id=$_POST['subcat_val'];
    $city_code=$_POST['city_ids'];
    $state_code=$_POST['state_ids'];
    $country_code=$_POST['country_ids'];
    $product=mysql_query("select * from products where c_id='$cat_id' and sc_id='$subcat_id' and country='$country_code' and state='$state_code' and city='$city_code'");
        while($item=mysql_fetch_array($product))
        {
                echo '<div class="col-sm-2" id="data">';
                echo '<div id="img"><img src="data:image/jpeg;base64,'.base64_encode( $item['p_image'] ).'"></div>';
                echo '<div class="name"><h3>'.$item['p_name'].'</h3></div>';
                echo'<div class="price"><h3>'.'Price : '.'&#8377; '.$item['p_price'].'</h3></div>';
                echo '<div class="desc">';?>
                <input type="submit" value="Buy Now" class="btn" onclick="addtocart(<?=$item['p_id']?>)">
                <?php echo '</div></div>';
        }
}
?>
