<html>

<head>
</head>
<style>
#gst {
    float: left;
    border: 2px solid black;
    height: 91%;
    width: 15%;
    padding: 12px;
    margin: 3px;
    background: #ebeff4;
}

li {
    list-style: none;
    padding: 6px;
    margin: 13px;
}

#asd {
    float: left;
    border: 2px solid black;
    height: 95%;
    width: 81%
}

#qwe {
    color: white;
    margin: 23px;
    width: 221px;
    border-radius: 500px;
    height: 44px;
    background-color: blue;
}
table,  tr{
    border:2px solid black;
}
#ert{
    width:28%;  
    height:6%;
    background-color:white;
    color:grey;
    border-radius:500px;
}
</style>

<body>
    <div id="gst">
        <li> monish</li>
        <li> Dashboard</li>
        <li> Sales</li>
        <li> Estimates</li>
        <li> Invoices</li>
        <li> Recurring Invoices</li>
        <li> Customer Statements</li>
        <li> Customers</li>
        <li>Products & Services</li>
        <li> Purchases</li>
        <li> Accounting</li>
        <li> Banking</li>
        <li> Payroll</li>
        <li> Reports</li>

    </div>
    <div id="asd">
        <div>

            <div style="float:left;">
                <h1> Recurring invoices</h1><br>
                <form>
                    <input style="height:4%;width:122%;" type="text" placeholder=" All Coustmer"></form>
            </div>

            <div style=" float:right;">
                <button id="qwe"> Create a recurring invoice</button></div>

        </div>
        <p style="clear:left;">Active(0) &nbsp; Draft(0) &nbsp; All Coustmers </p><hr>
       
            
            
            <table style="width:1024px;">
                <tr>
                    <th>status</th>
                    <th style="width: 27%;">coustmer</th>
                    <th style="width: 13%;">schedule</th>
                    <th style="width: 23%;">previous invoice</th>
                    <th style="width: 29%;"> next invoice</th>
                    <th style="width: 73%;"> invoice amount</th>
                
                </tr>

            </table>
         
         <center style="padding:109px;">
         You have no active recurring invoices.<br><br>
         You have 1 draft invoice. What would you like to do next?<br><br>

         
         <button id="ert">Creating a recurring invoice</button><button id="ert">View drafts</button>
         
         
         </center>
        

    </div>



</body>

</html