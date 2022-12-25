<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Jméno studenta</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="name" id="name" class="demoInputBox"
            value="<?php echo $result[0]["name"]; ?>">
    </div>
    <div>
        <label>Evidenční číslo</label> <span id="roll-number-info"
            class="info"></span><br /> <input type="text"
            name="roll_number" id="roll_number" class="demoInputBox"
            value="<?php echo $result[0]["roll_number"]; ?>">
    </div>
    <div>
        <label>Datum narození</label> <span id="dob-info" class="info"></span><br />
        <input type="text" name="dob" id="dob" class="demoInputBox"
            value="<?php echo $result[0]["dob"]; ?>">
    </div>
    <div>
        <label>Třída</label> <span id="class-info" class="info"></span><br />
        <input type="text" name="class" id="class" class="demoInputBox"
            value="<?php echo $result[0]["class"]; ?>">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
    </div>
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
    if(!$("#roll_number").val()) {
        $("#roll-number-info").html("(požadováno)");
        $("#roll_number").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#dob").val()) {
        $("#dob-info").html("(požadováno)");
        $("#dob").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#class").val()) {
        $("#class-info").html("(požadováno)");
        $("#class").css('background-color','#FFFFDF');
        valid = false;
    }   
    return valid;
}
</script>
    </body>
    </html>