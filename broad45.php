<script>
    //XML Object
    let xhttp = new XMLHttpRequest(); 
    let isok =true;

    xhttp.onreadysstatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200 ){
            if (xhttp.responseText == 0 ){
                document.getElementById('mesg').innerHTML = 'ok';
            }else{
                document.getElementById('mesg').innerHTML = 'XX';
            }
        }
    }
    
    function inNewAccount(){
        let account = document.getElementById('account').value;
        //alert(account);
        xhttp.open('GET','inNewAccount.php?account='+ account,true);
        //xhttp.sent();
    }

    function isSumit(){
        return isok;
    }

</script>


<form method='POST' action="broad45.php" enctype="multipart/form-data" onsubmit="return isSmit()" >
    Account : <input type="text" id="account" name="account" onchange="inNewAccount()"/> 
    <span id='mesg'></span> <br>
    Password : <input type="password" name="padded" /> <br>
    Realname : <input type="text" name="realname" /> <br>
    Icon : <input type="file" name="icon" /> <br>
    <input type="submit" name="Register" /> <br>
</form>

