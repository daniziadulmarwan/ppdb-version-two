$(document).ready(function () {
    // Hide Jenis Pendaftaran Extension Input
    $(function () {
        let value = $("#jenisPendaftaran").val();
        if (value == 2) {
            $("#pilihanKelas").removeClass("d-none");
        }
    });

    // Show Pendaftaran Extension Input When Siswa Pindahan Selected
    $("#jenisPendaftaran").on("change", function () {
        let value = $("#jenisPendaftaran").val();
        if (value == 2) {
            $("#pilihanKelas").removeClass("d-none");
        } else if (value == 1) {
            $("#pilihanKelas").addClass("d-none");
            $("#pilihanKelas").empty().append(`
                                              <select class="form-control">
                                                <option hidden>Pindah Ke Kelas</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                              </select>
                                              `);
        }
    });

    // Only Year Datepicker
    $(function () {
        $(".date-picker-year").datepicker({
            changeYear: true,
            showButtonPanel: true,
            dateFormat: "yy",
            onClose: function (dateText, inst) {
                var year = $(
                    "#ui-datepicker-div .ui-datepicker-year :selected"
                ).val();
                $(this).datepicker("setDate", new Date(year, 1));
            },
        });

        $(".date-picker-year").focus(function () {
            $(".ui-datepicker-month").hide();
            $(".ui-datepicker-calendar").hide();
        });
    });

    // Normal Datepicker
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy/mm/dd",
        });
    });

    // Send Id When Click Edit Modal Button
    $("#table-new-student").on("click", ".edit-button", function () {
        let id = $(this).data("id");
        Livewire.emit("getIdStudent", id);
    });
});

// Delete Student Function
function destroyNewStudent(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to destroy this data!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "btn-success",
        cancelButtonColor: "btn-danger",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Success!",
                text: "Your data has been deleted.",
                icon: "success",
            });
        }
    });
}
