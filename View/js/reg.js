    function isValid(){
    var flag = true;
    var fname=document.forms["reg"]["fname"].value;
    var lname=document.forms["reg"]["lname"].value;
    var gender=document.forms["reg"]["gender"].value;
    var dob=document.forms["reg"]["dob"].value;
    var religion=document.forms["reg"]["religion"].value;
    var Preaddress=document.forms["reg"]["Preaddress"].value;
    var Peraddress=document.forms["reg"]["Peraddress"].value;
    var phone=document.forms["reg"]["phone"].value;
    var email=document.forms["reg"]["email"].value;
    var username=document.forms["reg"]["username"].value;
    var password=document.forms["reg"]["password"].value;
    var cpassword=document.forms["reg"]["cpassword"].value;

    
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
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" Username can not be empty.";
        
    }
    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
        
    }
    if(cpassword ==="")
    {
        flag = false;
        document.getElementById('cpasswordErr').innerHTML=" Confirm Password can not be empty.";
        
    }
    return flag;
    }