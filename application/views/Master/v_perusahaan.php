<section class="content">
  <div class="container-fluid">
    <!-- Exportable Table -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              <ol class="breadcrumb">
                <li class="">Master Customer </li>
              </ol>
            </h2>

          </div>

          <div class="body">

            <div class="box-data">
              <table width="100%">
                <tr>
                  <td align="left">
                    <?php if ($this->session->userdata('level') <> "User") { ?>
                      <button type="button" class="btn-add btn btn-default btn-sm waves-effect">
                        <!-- <i class="material-icons">library_add</i> -->
                        <b><span>N E W</span></b>
                      </button>
                    <?php } ?>
                  </td>
                </tr>
              </table>


              <br><br>
              <table id="datatable11" class="table table-bordered table-striped table-hover dataTable ">
                <thead>
                  <tr>
                    <th style="width: 6%;">No</th>
                    <th style="width: 12%;">Pimpinan</th>
                    <th style="width: 20%;">Nama Instansi</th>
                    <th style="width: 20%;">Alamat</th>
                    <th style="width: 10%;">NPWP</th>
                    <th style="width: 12%;">No Telepon</th>
                    <th style="width: 12%;">Ket</th>
                    <th style="width: 8%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>

            <!-- box form -->
            <div class="box-form">
              <center>
                <div id="judul"></div>
              </center>
              <table width="70%">

                <tr>
                  <td>Pimpinan</td>
                  <td>:</td>
                  <td colspan="2">
                    <input type="text" id="pimpinan" value="" class="form-control" style="width: 40%" autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>Nama Instansi</td>
                  <td>:</td>
                  <td colspan="2">
                    <input type="hidden" id="id" value="" class="form-control" style="width: 40%">
                    <input type="text" id="nm_perusahaan" value="" class="form-control" style="width: 40%" autocomplete="off">
                    <input type="hidden" id="nm_perusahaan_lama" value="" class="form-control" style="width: 40%">
                  </td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td colspan="2">
                    <textarea id="alamat" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>NPWP</td>
                  <td>:</td>
                  <td colspan="2">
                    <input type="text" class="form-control" placeholder="" id="npwp" autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>No Telepon</td>
                  <td>:</td>
                  <td colspan="2">
                    <input type="text" class="form-control" placeholder="" id="no_telp" autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <select name="" id="laporan" class="form-control" style="width: 40%">
                      <option value="0">Pilih...</option>
                      <option value="sma">Sinar Mukti Abadi</option>
                      <option value="st">Sinar Teknindo</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" align="right">
                    <br>
                  </td>
                </tr>
              </table>


              <!-- <button type="button" class="btn-kembali btn btn-dark btn-sm waves-effect waves-circle waves-float"> -->
              <button type="button" class="btn-kembali btn btn-dark btn-default btn-sm waves-effect">
                <!-- <i class="material-icons">arrow_back</i> -->
                <b><span>BACK</span></b>
              </button> &nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="simpan()" id="btn-simpan" type="button" class="btn bg-light-green btn-sm waves-effect">
                <!-- <i class="material-icons">save</i> -->
                <b><span id="txt-btn-simpan">SIMPAN</span></b>
              </button> &nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="kosong()" type="button" class="btn btn-default btn-sm waves-effect">
                <!-- <i class="material-icons">note_add</i> -->
                <b><span>TAMBAH DATA</span></b>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- #END# Exportable Table -->
    </div>
</section>

<script>
  status = '';
  $(document).ready(function() {
    $(".box-form").hide();
    load_data();

    $("input.angka").keypress(function(event) { //input text number only
      return /\d/.test(String.fromCharCode(event.keyCode));
    });
  });

  $(".btn-add").click(function() {
    status = 'insert';
    kosong();
    // getmax();
    $(".box-data").hide();
    $(".box-form").show();
    $("#judul").html('<h3> Form Tambah Data</h3>');
    $('.box-form').animateCss('fadeInDown');
  });

  $(".btn-kembali").click(function() {
    $(".box-form").hide();
    $(".box-data").show();
    $('.box-data').animateCss('fadeIn');
    load_data();
  });

  function reloadTable() {
    table = $('#datatable11').DataTable();
    tabel.ajax.reload(null, false);
  }

  function load_data() {
    var table = $('#datatable11').DataTable();

    table.destroy();

    tabel = $('#datatable11').DataTable({
      "processing": true,
      "pageLength": true,
      "paging": true,
      "ajax": {
        "url": '<?php echo base_url(); ?>Master/load_data',
        "data": ({
          jenis: "Perusahaan"
        }),
        "type": "POST"
      },
      responsive: true,
      "pageLength": 10,
      "language": {
        "emptyTable": "Tidak ada data.."
      },
      "order": [
        [0, "asc"]
      ]
    });
  }


  function simpan() {
    roll = $("#id1").val() + "/" + $("#id2").val() + "/" + $("#id3").val() + "/" + $("#id4").val();

    pimpinan = $("#pimpinan").val();
    nm_perusahaan = $("#nm_perusahaan").val();
    nm_perusahaan_lama = $("#nm_perusahaan_lama").val();
    no_telp = $("#no_telp").val();
    laporan = $("#laporan").val();
    npwp = $("#npwp").val();
    alamat = $("textarea#alamat").val();
    id = $("#id").val();

    if (nm_perusahaan == "" || alamat == "" || laporan == "0" || laporan == "" || no_telp == "" || pimpinan == "") {
      showNotification("alert-info", "Harap Lengkapi Form", "bottom", "center", "", "");
      return;
    }

    $("#btn-simpan").prop("disabled", true);

    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>Master/' + status,
      data: ({
        id: id,
        pimpinan: pimpinan,
        nm_perusahaan: nm_perusahaan,
        nm_perusahaan_lama: nm_perusahaan_lama,
        alamat: alamat,
        no_telp: no_telp,
        laporan: laporan,
        npwp: npwp,
        jenis: "Perusahaan"
      }),
      dataType: "json",
      success: function(data) {
        $("#btn-simpan").prop("disabled", true);
        if (data.data == true) {

          reloadTable();
          showNotification("alert-success", "Berhasil", "bottom", "center", "", "");

          status = 'update';

        } else {
          showNotification("alert-danger", "Nama Perusahaan Sudah Ada", "bottom", "center", "", "");
        }

      }
    });
  }

  function tampil_edit(id) {
    $(".box-data").hide();
    $(".box-form").show();
    $('.box-form').animateCss('fadeInDown');
    $("#judul").html('<h3> Form Edit Data</h3>');
    $("#btn-simpan").prop("disabled", false);


    status = "update";

    $.ajax({
        url: '<?php echo base_url('Master/get_edit'); ?>',
        type: 'POST',
        data: {
          id: id,
          jenis: "Perusahaan"
        },
      })
      .done(function(data) {
        json = JSON.parse(data);

        $("#nm_perusahaan").val(json.nm_perusahaan);
        $("#nm_perusahaan_lama").val(json.nm_perusahaan);
        $("#no_telp").val(json.no_telp);
        $("#laporan").val(json.laporan);
        $("#npwp").val(json.npwp);
        $("#pimpinan").val(json.pimpinan);
        $("#id").val(json.id);
        $("textarea#alamat").val(json.alamat);

      })

  }

  function deleteData(id, nm) {
    swal({
        title: "Apakah Anda Yakin ?",
        text: nm,
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ya",
        cancelButtonText: "Batal",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            url: '<?php echo base_url(); ?>Master/hapus/',
            type: "POST",
            data: {
              id: id,
              jenis: "Perusahaan"
            },
            success: function(data) {
              if (data == 1) {
                swal("Berhasil", "", "success");
                reloadTable();

              } else {
                swal("Data Sudah dilakukan transaksi", "", "error");
              }
            }
          });

        } else {
          swal("", "Data Batal dihapus", "error");
        }
      });

  }

  function kosong() {
    $("#judul").html('<h3> Form Tambah Data</h3>');
    status = "insert";
    $("#id").val("");
    $("#nm_perusahaan").val("");
    $("#nm_perusahaan_lama").val("");
    $("textarea#alamat").val("");
    $("#pimpinan").val("");
    $("#no_telp").val("");
    $("#laporan").val("0");
    $("#npwp").val("");

    $("#btn-simpan").prop("disabled", false);
    $("#txt-btn-simpan").html("Simpan");
  }
</script>