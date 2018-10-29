function showCourse(str) {
    var xhttp;
    if (str == "") {
        document.getElementById("course").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("course").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getcourse.php?q="+str, true);
    xhttp.send();
}
function showsemester(str) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sem").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getsem.php?q="+str, true);
    xhttp.send();
}
function showStudents(str) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("students").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getstudents.php?q="+str, true);
    xhttp.send();
}
function ViewStudents(str) {
    var deptname=document.getElementById('deptname').value;
    var course= document.getElementById('course').value;
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("view").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "viewsave_student.php?q="+str+"&dept="+deptname+"&course="+course, true);
    xhttp.send();
}
function invoice_detail() {
    var rollno = document.getElementById('rollno').value;
    if (rollno == '') {
        alert('Please Enter the Roll No');
    } else {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                var split_output = output.split('-');
                document.getElementById('stu_name').value = split_output[0];
                document.getElementById('father_name').value = split_output[1];
                document.getElementById('dept').value = split_output[2];
                document.getElementById('course').value = split_output[3];
                document.getElementById('sem').value = split_output[4];
                document.getElementById('email').value = split_output[5];
                document.getElementById('mobile').value = split_output[6];
                document.getElementById('stu_id').value = split_output[7];
            }
        };
        xhttp.open("GET", "get_invoice.php?q=" + rollno, true);
        xhttp.send()
    }
}
$(document).ready(function () {
    //alert();
    $( function() {
        $( "#tabs" ).tabs();
    } );
});
function show_student_report(str)
{

    var deptname=document.getElementById('deptname').value;
    var course= document.getElementById('course').value;
    // alert("get_students_report.php?q="+str+"&dept="+deptname+"&course="+course);
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState+this.status+str);
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById("stu").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "get_students_report.php?q="+str+"&dept="+deptname+"&course="+course, true);
    xhttp.send();
}

function get_fee_details(str) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState+this.status+str);
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById("stu").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "get_fee_detail.php?q="+str+"&dept="+deptname+"&course="+course, true);
    xhttp.send();
}

function show_student_table() {
    //alert();
    var deptname=document.getElementById('deptname').value;
    var course=document.getElementById('course').value;
    var sem=document.getElementById('sem').value;
    var stu=document.getElementById('stu').value;
    var xhttp;
    //alert("get_fee_record.php?q="+deptname+"&course="+course+"&sem="+sem+"&stu="+stu);
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("students").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "get_fee_record.php?q="+deptname+"&course="+course+"&sem="+sem+"&stu="+stu, true);
    xhttp.send();

}

