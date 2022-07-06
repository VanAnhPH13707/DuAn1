function confirm_remove(url, name){
    Swal.fire({
        title: `Bạn có thực sự muốn xóa "${name}"?`,
        // showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = url
        }
    })
}
function confirm_lock(url, name){
    Swal.fire({
        title: `Bạn có thực sự thay đổi trạng thái tài khoản "${name}"?`,
        // showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = url
        }
    })
}