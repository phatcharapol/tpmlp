


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var mobile = $("#mobile").val();
    var messages = $("#messages").val();
   
 
    $.ajax({
        type: "POST",
        url: "process_mail.php",
        data: "submit=Y" + "&name=" + name + "&email=" + email + "&subject=" + subject + "&mobile=" + mobile + "&messages=" + messages,
        success : function(text){
                formSuccess(text);
            
        }
    });
}
function formSuccess(text){
    $( "#msgSubmit" ).text(text);
}