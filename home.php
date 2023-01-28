<html>
    <head>
        <title>Home</title>
        <script type="text/javascript">
            function showProduct(img) {
                window.location = "Product.php?name="+img;
            }
        </script>
        <style>
            .buttonStyle{
                background:blue;
                color:yellow;
            }
            .imageStyle{
                width:50%;
                height:5%;
            }
            img{
                vertical-align: top;
                 height: 160px;
                 aspect-ratio: auto 160 / 160;
                 width: 250px;
            }
            span {
                padding-left: 20%;
            }
        </style>
    </head>
    <body>
        <div>
            <input type="button" class="buttonStyle" value="Home">
            <input type="button" class="buttonStyle" value="Service">
            <input type="button" class="buttonStyle" value="About">
            <input type="button" class="buttonStyle" value="Contact">
        </div>
        <div style="display: flex;">
            <div class="imageStyle">
                <img src="images/frame1.jpg"><br>
                <span> <input type="button" value="500" onClick="showProduct('frame1');">
                </span>
            </div>
            <div class="imageStyle"><img src="images/frame2.jpg"><br> 
            <span> <input type="button" value="500" onClick="showProduct('frame2');">
                </span>
            </div>
            <div class="imageStyle"><img src="images/frame3.jpg"> <br>
            <span> <input type="button" value="500" onClick="showProduct('frame3');">
                </span>
            </div>
        </div>
    </body>
</html>
