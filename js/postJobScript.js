  function boxClick(element){
    var box = document.getElementsByClassName('box-container');
    for (var i = 0; i < box.length; i++) {
      box[i].style.display = 'none';
    }
     document.getElementById(element).style.display ='block';
     document.getElementById('showNone').style.display = 'block';
  }

  function showNone(element){
    var box = document.getElementsByClassName('box-container');
    for (var i = 0; i < box.length; i++) {
      box[i].style.display = 'none';
    }
  }

  $(document).ready(function(){
    $("#getDate").click(function(){
        var from = $("#from").val();
        var to = $("#to").val();
        $.ajax({
          url:'getDate.php',
          type:'post',
          data:{from:from,to:to},
          success:function(response){
            $("#message").html(response);
          }
        });
    });
});

  function show(){
  var x = document.getElementById('hide');

  if (x.style.display==="block") {
    x.style.display = "none";
  }
  else{
    x.style.display = "block";
  }
}