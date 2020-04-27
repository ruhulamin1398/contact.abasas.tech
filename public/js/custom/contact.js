  $(document).ready(function(){

    $(document).on('click', "#contact-edit-item", function() {



        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
          'backdrop': 'static'
        };
        $('#contact-edit-modal').modal(options)
      });

      // on modal show
      $('#contact-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
        var row = el.closest(".data-row");

        // get the data
        var id = el.data('item-id');
        var name = row.children(".name").text();
        var phone = row.children(".phone").text();
        var address = row.children(".address").text();
        var comment = row.children(".comment").text();


        var action= $("#indexLink").val()+'/contacts/'+id;
        $("#contact-edit-form").attr('action',action);

        // fill the data in the input fields
        $("#modal-input-id").val(id);
        $("#modal-input-name").val(name);
        $("#modal-input-phone").val(phone);
        $("#modal-input-address").val(address);
        $("#modal-input-comment").val(comment);


      });

      // on modal hide
      $('#contact-edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#contact-edit-form").trigger("reset");
      });

  }) ;
