function isValid(){
    var flag = true;
    var oldpassword=document.forms["cpass"]["oldpassword"].value;
    var newpassword=document.forms["cpass"]["newpassword"].value;


    
    if(oldpassword ==="")
    {
        flag = false;
        document.getElementById('oldpasswordErr').innerHTML=" Old Password can not be empty.";
    }
    if(newpassword ==="")
    {
        flag = false;
        document.getElementById('newpasswordErr').innerHTML=" New Password can not be empty.";
        
    }
    return flag;
    }