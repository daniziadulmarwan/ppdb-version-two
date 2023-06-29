$(document).ready(function () {
    // CSRF Setup
    $(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"').attr("content"),
            },
        });
    });

    // Select2
    $("#propinsi").select2();
    $("#kabupaten").select2();
    $("#kecamatan").select2();
    $("#kelurahan").select2();

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

    function getRegency(id) {
        $.ajax({
            type: "post",
            url: "/kabupaten",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kabupaten").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getRegencyById(id) {
        $.ajax({
            type: "post",
            url: "/kabupaten/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kabupaten").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getDistrict(id) {
        $.ajax({
            type: "post",
            url: "/kecamatan",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kecamatan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getDistrictById(id) {
        $.ajax({
            type: "post",
            url: "/kecamatan/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kecamatan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getVillage(id) {
        $.ajax({
            type: "post",
            url: "/kelurahan",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kelurahan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getVillageById(id) {
        $.ajax({
            type: "post",
            url: "/kelurahan/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kelurahan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    // Indoregion Dropdown
    // const id = $("#propinsi").val();
    // if (id) {
    //     getRegency(id);
    // }

    // const regencyId = $("#kabupaten").val();
    // if (regencyId) {
    //     getRegencyById(regencyId);
    // }

    // const districtId = $("#kecamatan").val();
    // if (districtId) {
    //     getDistrictById(districtId);
    // }

    // const villageId = $("#kelurahan").val();
    // if (villageId) {
    //     getVillageById(villageId);
    // }

    $("#propinsi").on("change", function () {
        const id = $("#propinsi").val();
        getRegency(id);
    });

    $("#kabupaten").on("change", function () {
        const id = $("#kabupaten").val();
        getDistrict(id);
    });

    $("#kecamatan").on("change", function () {
        const id = $("#kecamatan").val();
        getVillage(id);
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
