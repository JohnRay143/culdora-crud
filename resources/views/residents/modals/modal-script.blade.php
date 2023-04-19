<script>
  
  $(document).ready(function(){
    var residents = {!! json_encode($residents) !!};


    $('.show-btn').on('click', function(){
      
      var name = residents[$(this).data('key')].name;
      var address = residents[$(this).data('key')].address;
      var mobile = residents[$(this).data('key')].mobile;

      $('#show-name').text(name);
      $('#show-address').text(address); 
      $('#show-mobile').text(mobile);
    
    });   


    $('.edit-btn').on('click', function(){
      
      var name = residents[$(this).data('key')].name;
      var address = residents[$(this).data('key')].address;
      var mobile = residents[$(this).data('key')].mobile;

      
      $('#edit-name').val(name);
      $('#edit-address').val(address); 
      $('#edit-mobile').val(mobile);
      
      $('#edit-modal').find('#edit-form').attr('action', '/residents/' + residents[$(this).data('key')].id);
      });   

      $('#update-button').on('click', function(){
        $('#edit-modal').find('#edit-form').submit();
      })



      $(document).on('click', '#create-button', function(){
        $('#create-modal').find('#create-form').submit();
      })



    $('.btn-delete').on('click', function(){
      var cnfrm = confirm('Are you sure you want to delete this record?');
      var id = $(this).data('id');
      var that = $(this);  
      if(cnfrm)
      {
        $.ajax({
            url: '/residents/' + id,
            method:'POST',
            data: {
           _method: 'delete',
          _token: '{{csrf_token()}}'
             },
                success: function(e) {
                      $(that).parents('tr').remove();
                    }
              });
        }


    });
});
</script>