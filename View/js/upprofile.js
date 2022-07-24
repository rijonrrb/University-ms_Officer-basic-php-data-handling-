function isValid(){
    var flag = true;
    var fname=document.forms["upprof"]["fname"].value;
    var lname=document.forms["upprof"]["lname"].value;
    var gender=document.forms["upprof"]["gender"].value;
    var dob=document.forms["upprof"]["dob"].value;
    var religion=document.forms["upprof"]["religion"].value;
    var Preaddress=document.forms["upprof"]["Preaddress"].value;
    var Peraddress=document.forms["upprof"]["Peraddress"].value;
    var phone=document.forms["upprof"]["phone"].value;
    var email=document.forms["upprof"]["email"].value;

    
    if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" First name can not be empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" Last name can not be empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" Gender can not be empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" Date of birth can not be empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" Religion can not be empty.";
        
    }
    if(Preaddress ==="")
    {
        flag = false;
        document.getElementById('PreaddressErr').innerHTML=" Present Address can not be empty.";
        
    }
    if(Peraddress ==="")
    {
        flag = false;
        document.getElementById('PeraddressErr').innerHTML=" Permanent Address can not be empty.";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Phone number can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    return flag;
    }