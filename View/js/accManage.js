    function isValid(val){
    var flag = true;
    
    var id=  val.id.value
    var status=  val.status.value
    var description=  val.description.value
 
    if(id ==="")
    {
        flag = false;
        document.getElementById('idErr').innerHTML=" Id can not be empty.";
    }
    if(status ==="")
    {
        flag = false;
        document.getElementById('statusErr').innerHTML=" Status can not be empty.";
        
    }
    if(description ==="")
    {
        flag = false;
        document.getElementById('descriptionErr').innerHTML=" Description can not be empty.";
        
    }
    return flag;
    }
    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("id",pform.id.value);
        data.append("status",pform.status.value);
        data.append("description",pform.description.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("accManage").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../Controller/accManageAjax.php");
        xhttp.send(data);

    }
    
}