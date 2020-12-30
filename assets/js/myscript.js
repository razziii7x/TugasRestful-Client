const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    swal2({
        title: 'Character Data ',
        text: 'Success ' + flashData,
        type: 'success'
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure?',
        text: "Data Charactar Will Be Deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Deleted!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});