function isValid(){
    var flag = true;
    var id=document.forms["upstu"]["id"].value;
    var name=document.forms["upstu"]["name"].value;
    var address=document.forms["upstu"]["address"].value;
    var phone=document.forms["upstu"]["phone"].value;
    var credit=document.forms["upstu"]["credit"].value;
    var course=document.forms["upstu"]["course"].value;
    var grade=document.forms["upstu"]["grade"].value;


    
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
    if(credit ==="")
    {
        flag = false;
        document.getElementById('creditErr').innerHTML=" Credit can not be empty.";
        
    }
    if(course ==="")
    {
        flag = false;
        document.getElementById('courseErr').innerHTML=" Course can not be empty.";
        
    }
    if(grade ==="")
    {
        flag = false;
        document.getElementById('gradeErr').innerHTML=" Grade can not be empty.";
        
    }
    return flag;
    }