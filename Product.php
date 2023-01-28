<?php
$path="images/".$_GET['name'].'.jpg';
?>

<html>
    <head>
        <title>Product</title>
    </head>
    <body>
        <div style="display: flex;">
            <div style="width: 70%;">
                <img src="<?php echo $path ?>" style="width: 80%; height: 200px;">
                <br> 
                Add to Cart
            </div>
            <div style="width: 30%">
                <p>frame1 framesize: frame length: frame area: properties</p>
                <button> 500 </button>
            </div>
        </div>
    </body>
</html>