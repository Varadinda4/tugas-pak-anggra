<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

?>

<div class="card border-light bg-success p-2 text-dark bg-opacity-25">
    <div class="card-header"><a class="btn btn-primary p-3 mb-2 bg-success text-white" href="main.php?menu=<?php echo base64_encode('id_sp') ?>">Kembali</a></div>
    <div class="card-body text-dark">
        <h4 class="card-title">Form Tambah Spp</h4>

        <p class="card-text ">
        <form action="../Config/Routes.php?function=create_spp" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />

            <input type="hidden" name="id_spp">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-sm-10">
                    <input type="text" name="tahun" onKeypress="return isNumberKey(event)" required class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                    <input type="text" name="nominal" onKeypress="return isNumberKey(event)" required class="form-control">
                </div>
            </div>

            <input style="margin-left: 92%;" class="btn btn-primary p-3 mb-2 bg-success text-white" type="submit" name="proses" value="Tambah">
        </form>

        </p>
    </div>


</div>
<script>
    function ValidateAlpha(evt) {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

            return false;
        return true;
    }

    function isNumberKey(evt) {
        //var e = evt || window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode != 46 && charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>