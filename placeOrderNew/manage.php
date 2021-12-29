<?php
session_start();
//if form method is post then this will execute
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['Add_To_Cart'])) //isset check wheather a button clicked or not.Here he will check Add-To-Cart button clicked or not.
    {
        if (isset($_SESSION['cart']))  
        {
        //Store every names in myItems array.
        $myItems = array_column($_SESSION['cart'],'Item_Name');
        //Check wheather item present in myItems.If present then through an alert.
        if (in_array($_POST['Item_Name'],$myItems)) 
        {
            echo"<script>
            alert('Item already added to the cart');
            window.location.href = 'index.php';
            </script>";
        }
        else
        {
            //After else condition cart contains more than 0 item.So if condition true and count increases by 1 everytime.
            $count =count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('Item added to the cart successfully');
            window.location.href = 'index.php';
            </script>";
        }
    }
    else
    {
        $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
        echo"<script>
        alert('Item added to the cart successfully');
        window.location.href = 'index.php';
        </script>";
    }
}
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        //Check condition remove button clicked 'Item-Name' and array 'Item-Name' same or not
        if($value['Item_Name'] == $_POST['Item_Name'])
        {
            //If both same then remove key
            unset($_SESSION['cart'][$key]);
            //Rearrange array after removing
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo"<script>
            alert('Item remove successfully');
            window.location.href = 'mycart.php';
            </script>";
        }
    }
}
}
?>