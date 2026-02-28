jQuery(document).ready(function ($) {

  //Delete modal for any model row
  $(function () {
    $('.js-sweetalert').on('click', function () {

          var token = $("meta[name='csrf-token']").attr("content");
          $route=$(this).data("route");

          swal({
              title: "Are you sure?",
              text: "You will not be able to recover this item!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#dc3545",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
          }, function () {

              $.ajax(
                  {
                      url:  $route ,
                      type: 'POST',
                      data: {
                        "_method": "DELETE",
                        "_token": token,
                      },
                      success: function (){
                      }
                  });

                  swal({
                      title: "Deleted",
                      text: "Your item has been deleted.",
                      type: "success",
                      showCancelButton: false,
                      confirmButtonColor: "#007bff",
                      confirmButtonText: "Ok",
                      closeOnConfirm: false
                  },function(){
                      location.reload();
                  });
          });

    });
  });
  //end delete modal


  //change status for any model row
  $(function () {
    $('.change-status').on('click', function () {

        $route=$(this).data("route");
        $this = $(this);

        $id = $this.attr('id');
        $.ajax({
          url: $route,
          type: 'get',
          dataType: 'JSON',
          success: function (response) {
            if (response['status'] == true) {
              if (response['type'] == 1) {
                $this.removeClass('tag-warning').addClass('tag-success');
                swal("Status Changed", "Thank You For Your Trust!", "success");
                $this.html('Active')
              } else {
                $this.removeClass('tag-success').addClass('tag-warning');
                swal("Status Changed", "Thank You For Your Trust!", "success");
                $this.html('Disabled');
              }
            }
            if (response['is_open'] == true) {


                $this.parents('tr').find(".editCategoryModal").attr('data-attr-is-open',response['type'])
                $this.parents('tr').find(".viewCategoryModal").attr('data-attr-is-open',response['type'])
              if (response['type'] == 1) {
                $this.removeClass('tag-warning').addClass('tag-success');
                swal("Category Opened", "Thank You For Your Trust!", "success");
                $this.html('Active')
              } else {
                $this.removeClass('tag-success').addClass('tag-warning');
                swal("Category Closed", "Thank You For Your Trust!", "success");
                $this.html('Disabled');
              }
            }
          }
        });

    });
  });
  //end change status
});
