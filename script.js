
$(document).ready(function(){
  $("#registrationForm").submit(function(e){
    let valid = true;
    $("input[required], select[required], textarea[required]").each(function(){
      if($(this).val().trim() === ""){
        valid = false;
        $(this).css("border","2px solid red");
      } else {
        $(this).css("border","1px solid #ccc");
      }
    });
    if(!valid){
      e.preventDefault();
      alert("⚠️ Please fill in all required fields!");
    }
  });
});