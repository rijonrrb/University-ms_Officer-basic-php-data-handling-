function isValid(){
    var flag = true;
    var id=document.forms["upfac"]["id"].value;
    var name=document.forms["upfac"]["name"].value;
    var address=document.forms["upfac"]["address"].value;
    var phone=document.forms["upfac"]["phone"].value;
    var email=document.forms["upfac"]["email"].value;
    var dept=document.forms["upfac"]["dept"].value;
    var position=document.forms["upfac"]["position"].value;

    
    if(id ==="")
    {
        flag = false;
        document.getElementById('idErr').innerHTML=" Id can not be empty.";
    }
    if(name ==="")
    {
        flag = false;
        document.getElementById('nameErr').innerHTML=" Name can not be empty.";
        
    }
    if(address ==="")
    {
        flag = false;
        document.getElementById('addressErr').innerHTML=" Address can not be empty.";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Phone can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    if(dept ==="")
    {
        flag = false;
        document.getElementById('deptErr').innerHTML=" Depterment can not be empty.";
        
    }
    if(position ==="")
    {
        flag = false;
        document.getElementById('positionErr').innerHTML=" Position can not be empty.";
        
    }
    return flag;
    }