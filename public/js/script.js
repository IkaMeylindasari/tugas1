$( function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa'); 
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvcIkaAmel/public/mahasiswa/ubah');
    
        $('#nama').val(''); 
        $('#nrp').val(''); 
        $('#email').val(''); 
        $('#jurusan').val(''); 
        $('#id').val('');
    })

  
   $('.tampilModalUbah').on('click', function(){
        
     $('#formModalLabel').html('Ubah Data Mahasiswa');
     $('.modal-footer button[type=submit]').html('Ubah Data');

     const id = $(this).data('id');
     
     $.ajax({
       url: 'http://localhost/phpmvcIkaAmel/public/mahasiswa/getubah',
       data:{id : id},
       method: 'post',
       dataType: 'json',
       success: function(data){
        $('#nama').val(data.nama); 
        $('#nrp').val(data.nrp); 
        $('#email').val(data.email); 
        $('#jurusan').val(data.jurusan); 
        $('#id').val(data.id); 
       }
     });

   });

});