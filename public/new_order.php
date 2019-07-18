<html>

<head>
</head>
<style>
#asd {
    float: left;
    border: 2px solid black;
    height: 189%;
    width: 79%
}

#qwe {
    color: white;
    margin: 23px;
    width: 221px;
    border-radius: 500px;
    height: 44px;
    background-color: blue;
}

#qwe2 {
    border-radius: 500px;
    width: 26%;
    height: 4%;
    background-color: white;
}

#cvb {
    width: 100%;
    height: 32%;
    border: 2px solid black;
    clear: left;

}

#form {
    float: right;
}


#form input {
    width: 48%;
    margin: 5%;
    line-height: 2;
}

#iop {
    float: left;
    height: 174px;

    border: 1px solid black;
    width: 206px;
    border-radius: 12px;
    margin: 25px;
}

table,
th tr {
    border: 2px solid black;
}

#nkl {
    border: 2px solid black;
    height: 3%;

}

#iop {
    text-align: center;
    color: blue;
    margin-top: 20px;
}

#mn {
    height: 10%;
    width: 100%;



}
</style>

<body>
<?php
 include "menu.php";
 ?>
    <div id="asd">
        <div style="float:left;">
            <h1> New order</h1><br>
            <form>
                <input style="height:5%;width:550%;" type="text"
                    placeholder=" Business adress and contact details, title,summary and logo"></form>
        </div>
        <div style=" float:right;width:367px;">
            <button id="qwe2">Preview</button>
            <button id="qwe"> Save and continue</button>
        </div>
        <div id="cvb">
            <form id="form">
                customer name &nbsp;&nbsp;&nbsp;<input type="text" name="Invoice number"><br>
                Phone number &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="P.O/S.O number"><br>
                Paid Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="yyyy-mm-dd"
                    value="2019-07-05"><br>
                Delivery date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="yyyy-mm-dd"
                    value="2019-07-05">
                <p style="margin:127px;margin-top:2px;">On Recepit</p>




            </form>

            <div id="iop">
                <p style="margin-top:74px;"><a href="">Add a product
                    </a>
                </p>
            </div><br> <br>
            <p style="clear:left;color:blue;margin:8%;text-decoration:none;"><a href="">Edit columns</a></p>

        </div><br><br>
        <style>
        .itemlist td {
            padding: 5px;

        }
        </style>
        <table class="itemlist" style="width:95%;border:1px solid gray;margin:auto" border="1">
            <tr>
                <th style="width:10%;">Items</th>
                <th style="width: 62%;">Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Item-1</td>
                <td>100</td>
                <td>Rs. 55</td>
                <td>5500</td>
            </tr>
            <tr>
                <td>Item-1</td>
                <td>100</td>
                <td>Rs. 55</td>
                <td>5500</td>
            </tr>
            <tr>
                <td>Item-1</td>
                <td>100</td>
                <td>Rs. 55</td>
                <td>5500</td>
            </tr>
            <tr>
                <td>Item-1</td>
                <td>100</td>
                <td>Rs. 55</td>
                <td>5500</td>
            </tr>
            <tr>
            <td></td>
            
                <td colspan="2">

                    <div style="width:100%">
                        <center>
                            <button style="height:30px;margin:5px;background-color:white;color:#136acd;font-weight: bold;
    cursor: pointer;font-size:99%;">Add a item</button>
                        </center>
                    </div>
                </td>
                <td></td>
                
                
                
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>Subtotal</td>
                <td> ₹0.00</td>

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <form>
                        Total <input style="height:20%;" type="text" placeholder="INR(₹)-Indian rupee">


                    </form>
                </td>
                <td>₹0.00</td>



            </tr>
        </table>
        <form>
            Notes <input id="mn" type="text" placeholder="Enter notes that are visible to your coustmer">


        </form>
        <button style="width:100%;height:6%;background-color:white;color:black;font-weight: bold;
    cursor: pointer;font-size:99%;display:flex;justify-content: space-between;">Footer</button>



        <div style=" float:right;width:367px;">
            <button id="qwe2">Preview</button>
            <button id="qwe"> Save and continue</button>
        </div>



    </div>







</body>

</html>