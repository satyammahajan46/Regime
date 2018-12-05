function showMRP(str) {
    var selp = document.getElementById('selp').value;

    if (str == '' || selp == '') {
        alert("Chose the Value First");
    }
    else {
        // alert(str);
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var output = this.responseText;
                var split_output = output.split('-');
                document.getElementById('cgst').value = split_output[0] + '%';
                document.getElementById('sgst').value = split_output[1] + '%';
                var total = parseInt(split_output[0]) + parseInt(split_output[1]);
                //alert(selp*total);
                var mrp = ((selp * total) / 100) + parseInt(selp);
                document.getElementById('tgst').value = total + '%';
                document.getElementById('mrp').value = mrp;
                document.getElementById('hsn').value = split_output[2];

            }
        };
        xhttp.open("GET", "get_mrp.php?q=" + str, true);
        xhttp.send();
    }
}


$(document).ready(function () {
    //alert();
    $("input[name='invoice_type']").click(function () {
        //alert();
        var invoice_type = $("input[name='invoice_type']:checked").val();
        //alert(invoice_type);
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('cust_detail').innerHTML="";
                document.getElementById('customer').innerHTML=this.responseText;
            }
        };
        xhttp.open("GET", "get_customer.php?q=" + invoice_type, true);
        xhttp.send();
    });

});

function fetchCustomer(str) {
   // alert();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('cust_detail').innerHTML=this.responseText;
        }
    };
    xhttp.open("GET", "fetch_customer.php?q=" + str, true);
    xhttp.send();

}