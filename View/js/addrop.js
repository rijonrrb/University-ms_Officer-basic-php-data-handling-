    function isValid(val){
    var flag = true;
    var studentId=  val.studentId.value
    var courseName=  val.courseName.value
    var courseID=  val.courseID.value
    var adddrop=  val.adddrop.value
    var checkbox=  val.checkbox.value
 
    if(studentId ==="")
    {
        flag = false;
        document.getElementById('studentIdErr').innerHTML=" Student ID can not be empty.";
    }
    if(courseName ==="")
    {
        flag = false;
        document.getElementById('courseNameErr').innerHTML=" Course Name can not be empty.";
        
    }
    if(courseID ==="")
    {
        flag = false;
        document.getElementById('courseIDErr').innerHTML=" Course ID can not be empty.";
        
    }
    if(adddrop ==="")
    {
        flag = false;
        document.getElementById('adddropErr').innerHTML=" Add/Drop status can not be empty.";
        
    }
    return flag;
    }
    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("studentId",pform.studentId.value);
        data.append("courseName",pform.courseName.value);
        data.append("courseID",pform.courseID.value);
        data.append("adddrop",pform.adddrop.value);
        data.append("checkbox",pform.checkbox.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("course").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../Controller/addropajax.php");
        xhttp.send(data);

    }
    
}