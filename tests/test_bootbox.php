<script>
    var form = $('<form><input name="usernameInput"/></form>');
    bootbox.alert(form,function(){
        var username = form.find('input[name=usernameInput]').val();
        console.log(username);
    })
</script>

<script>
$("#bootbox").on("click", function(event) {
  var modal = bootbox.dialog({
    message: $(".form-content").html(),
    title: "Your awesome modal",
    buttons: [{
      label: "Save",
      className: "btn btn-primary pull-left",
      callback: function() {
        var form = modal.find(".form");
        var items = form.serializeJSON();

        alert(JSON.stringify(items));

        /* 
        This part you have to complete yourself :D

        if (your_form_validation(items)) {
          // Make your data save as async and then just call modal.modal("hide");
        } else {
          // Show some errors, etc on form
        }
        */

        return false;
      }
    }, {
      label: "Close",
      className: "btn btn-default pull-left",
      callback: function() {
        console.log("just do something on close");
      }
    }],
    show: false,
    onEscape: function() {
      modal.modal("hide");
    }
  });

  modal.modal("show");
});
</script>