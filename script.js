$(document).ready(function () {
    loadData();
});

function loadData() {
    $.get('ajax/data.php', function (response) {
        $('#dataContainer').html(response);
        // $('#deleteData').click(function (e) {

        // })

    })

}

function tambahData() {
    console.log('test');
    var nama = $('#nama').val();
    var jurusan = $('#jurusan').val();
    var kelas = $('#kelas').val();
    var data = "nama=" + nama + "&jurusan=" + jurusan + "&kelas=" + kelas;
    $.ajax({
        type: "post",
        url: "ajax/create.php",
        data: data,
        success: function (response) {
            loadData();
        },
        Error: function (response) {
            alert("fail")
        }
    });
    return false;
}

function updateData(id) {
    var nama = $('#namaUpdate' + id).val();
    var jurusan = $('#jurusanUpdate' + id).val();
    var kelas = $('#kelasUpdate' + id).val();
    var data = "id=" + id + "&nama=" + nama + "&jurusan=" + jurusan + "&kelas=" + kelas;
    console.log(data);
    $.ajax({
        type: "post",
        url: "ajax/update.php",
        data: data,
        success: function (response) {
            console.log('succ');
            loadData();
        },
        Error: function (response) {
            alert("fail")
        }
    });
    return false;
}

function deleteData(id) {
    console.log('clicked');
    if (confirm('Anda Ingin Menghapus Data Ini?')) {
        $.ajax({
            url: "ajax/delete.php",
            method: "POST",
            data: "id=" + id,
            success: function (data) {
                loadData();
            }
        });
    }
    return false;
}