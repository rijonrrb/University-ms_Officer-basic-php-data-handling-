    function isValid(val){
    var flag = true;
    
    var ccode=  val.ccode.value
    var cname=  val.cname.value
    var cdescription=  val.cdescription.value
    var ccredit=  val.ccredit.value
 
    if(ccode ==="")
    {
        flag = false;
        document.getElementById('ccodeErr').innerHTML=" Code can not be empty.";
    }
    if(cname ==="")
    {
        flag = false;
        document.getElementById('cnameErr').innerHTML=" Name can not be empty.";
        
    }
    if(cdescription ==="")
    {
        flag = false;
        document.getElementById('cdescriptionErr').innerHTML=" Description can not be empty.";
        
    }
    if(ccredit ==="")
    {
        flag = false;
        document.getElementById('ccreditErr').innerHTML="Credit can not be empty.";
        
    }
    return flag;
    }
    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("ccode",pform.ccode.value);
        data.append("cname",pform.cname.value);
        data.append("cdescription",pform.cdescription.value);
        data.append("ccredit",pform.ccredit.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("course").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../Controller/addcourseAjax.php");
        xhttp.send(data);

    }
    
}