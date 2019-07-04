
<form action="call.php" method="POST">   <!--  $_GET沒保密  $_POST有保密   -->

<input type="text" name="account" /> <br>
<input type="password" name="passwd" /> <br>
Gender :  <!--  //只能擇一選擇，則radio的name要群組化  -->
    <input type="radio" name="gender" value="m" cheched> Male   <!-- 預設 -->
    <input type="radio" name="gender" value="f"> Female <br>
Like : <br>
    <input type="checkbox" name="like[]" value="1">打電話<br>
    <input type="checkbox" name="like[]" value="2">打籃球<br>
    <input type="checkbox" name="like[]" value="3">打麻將<br>
    <input type="checkbox" name="like[]" value="4">玩點動<br>
    <input type="checkbox" name="like[]" value="5">玩電腦<br>

<input type="submit" name="Register" /> <br>

</form>