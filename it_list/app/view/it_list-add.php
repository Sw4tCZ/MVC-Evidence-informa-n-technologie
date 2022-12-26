<?php require_once "app/view/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Název</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="name" id="name" class="demoInputBox">
    </div>
    <div>
        <label>Množství</label> <span id="quantity-info"
            class="info"></span><br /> <input type="text"
            name="quantity" id="quantity" class="demoInputBox">
    </div>
    <div>
        <label>Vydáno (komu)</label> <span id="issue-info" class="info"></span><br />
        <input type="text" name="issue" id="issue" class="demoInputBox">
    </div>
    <div>
        <label>Datum</label> <span id="date-info" class="info"></span><br />
        <input type="date" name="date" id="date" class="demoInputBox">
    </div>
    <div>
        <input type="submit" name="add" id="btn" value="Přidat" />
        <input type="reset" name="reset" id="btnReset" value="Reset">
        <input type="button" name="back" id="btn" onclick="history.back();" value="Zpět">
        
    </div>
    
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous">
    type="text/javascript"></script>
<script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(požadováno)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#quantity").val()) {
        $("#quantity-info").html("(požadováno)");
        $("#quantity").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#issue").val()) {
        $("#issue-info").html("(požadováno)");
        $("#issue").css('background-color','#FFFFDF');
        valid = false;
    }   

    if(!$("#date").val()) {
        $("#date-info").html("(požadováno)");
        $("#date").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}
</script>
</body>
</html>