<section class="content">
        <div class="container-fluid">
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <ol class="breadcrumb">
                                    <li class="">Master Barang</li>
                                </ol>
                            </h2>

                        </div>

                        <div class="body">
                            
                            <div class="box-data">
                              <table width="100%">
                                <tr>
                                  <td align="left"> <button type="button" class="btn-add btn btn-default btn-sm waves-effect">
                                        <i class="material-icons">library_add</i>
                                        <b><span>New</span></b>
                                    </button>
                                  </td>
                                </tr>
                              </table>
                            
                            
                              <br><br>
                                <table id="datatable11" class="table table-bordered table-striped table-hover dataTable ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Supplier</th>
                                            <th>No. Nota</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Merek</th>
                                            <th>Spesifikasi</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <!-- box form -->
                            <div class="box-form">
                                <div id="judul"></div>
                                <table width="80%">
                                    <tr>
                                      <th style="border:0;padding:5px;width:10%"></th>
                                      <th style="border:0;padding:5px;width:1%"></th>
                                      <th style="border:0;padding:5px;width:30%"></th>
                                      <th style="border:0;padding:5px"></th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal </td>
                                        <td>:</td>
                                        <td>
                                            <input type="date" id="tgl" value="<?php echo date('Y-m-d') ?>"  class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                      <td style="padding:10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Pilih</td>
                                        <td>:</td>
                                        <td>
                                        <select class="form-control" id="supplier" style="width:100%">
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Supplier</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="supplier_note" autocomplete="off" class="form-control" disabled="true" style="background:#ddd">
                                            <input type="hidden" value="" id="id_supplier">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No. Nota</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="no_nota" autocomplete="off" class="form-control" disabled="true" style="background:#ddd">
                                        </td>
                                    </tr>
                                    <tr>
                                      <td style="padding:10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Barang</td>
                                        <td>:</td>
                                        <td>
                                          <table style="width:100%" border="0">
                                            <tr>
                                              <td width="30%"><input type="text" id="id1" class="angka form-control" maxlength="5"></td>
                                              <td width="1%">/</td>
                                              <td width="64%"><input type="text" id="id2" class="form-control" maxlength="15"></td>
                                            </tr>
                                          </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="nama_barang" autocomplete="off" class="form-control">
                                            <input type="hidden" value="" id="id">
                                            <!-- <input type="hidden" value="" id="kode_barang_lama"> -->
                                            <input type="hidden" value="" id="supplier_lama">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Merek</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="merek" autocomplete="off" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Spesifikasi</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="spesifikasi" autocomplete="off" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>QTY</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="qty" placeholder="0" autocomplete="off" class="form-control" onkeypress="return hanyaAngka(event)">
                                        </td>
                                        <td>
                                            <select name="" id="qty_ket" class="form-control" style="width:20%">
                                              <option value="0">KET</option>
                                              <option value="Batang">Batang</option>
                                              <option value="Lonjor">Lonjor</option>
                                              <option value="PCS">PCS</option>
                                              <option value="Box">Box</option>
                                              <option value="Kaleng">Kaleng</option>
                                              <option value="Lembar">Lembar</option>
                                              <option value="Liter">Liter</option>
                                              <option value="KG">KG</option>
                                              <option value="Unit">Unit</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="harga" placeholder="0" autocomplete="off" class="form-control" onkeypress="return hanyaAngka(event)">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="right">
                                            <br>
                                            
                                        </td>
                                    </tr>
                                </table>
                               

                                <!-- <button type="button" class="btn-kembali btn btn-dark btn-sm waves-effect waves-circle waves-float"> -->
                                <button type="button" class="btn-kembali btn btn-dark btn-default btn-sm waves-effect">
                                    <i class="material-icons">arrow_back</i>
                                    <b><span>BACK</span></b>
                                </button> &nbsp;&nbsp;&nbsp;&nbsp;
                                <button onclick="simpan()" id="btn-simpan" type="button" class="btn bg-light-green btn-sm waves-effect">
                                    <i class="material-icons">save</i>
                                    <b><span id="txt-btn-simpan">SIMPAN</span></b>
                                </button> &nbsp;&nbsp;&nbsp;&nbsp;
                                <button onclick="kosong()" type="button" class="btn btn-default btn-sm waves-effect">
                                    <i class="material-icons">note_add</i>
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
    $(document).ready(function(){
      $(".box-form").hide();
     load_data();
     load_supplier();

    $("input.angka").keypress(function(event) { //input text number only
            return /\d/.test(String.fromCharCode(event.keyCode));
      });

     
    });

    $(".btn-add").click(function(){
        status = 'insert';
        kosong();
        // getmax();
        $(".box-data").hide();
        $(".box-form").show();
        $("#judul").html('<h3>Form Tambah Data Barang</h3>');
      $('.box-form').animateCss('fadeInDown');
    });

    $(".btn-kembali").click(function(){
        $(".box-form").hide();
        $(".box-data").show();
        $('.box-data').animateCss('fadeIn');
        load_data();
    });

    function reloadTable(){
      table = $('#datatable11').DataTable();
       tabel.ajax.reload(null,false);
   }

    function load_data(){
      var table = $('#datatable11').DataTable();

         table.destroy();

         tabel = $('#datatable11').DataTable({

               "processing": true,
               "pageLength":true,
               "paging": true,
               "ajax": {
                   "url" : '<?php echo base_url(); ?>Master/load_data' ,
                   "data" : ({jenis:"Load_Barang"}),
                   "type": "POST"
               },
               responsive: true,
               "pageLength": 10,
               "language": {
                       "emptyTable":     "Tidak ada data.."
                   },
               "order": [[ 0, "asc" ]]
               });
    }

    function simpan(){
      id = $("#id").val();
      tgl = $("#tgl").val();
      
      data = $('#supplier').select2('data');
      // supplier = data[0].id;
      // supplier_lama = $("#supplier_lama").val();
      supplier = $("#id_supplier").val();
      supplier_note = $("#supplier_note").val();
      no_nota = $("#no_nota").val();

      kode_barang = $("#id1").val()+"/"+$("#id2").val();
      kode_barang_lama = $("#kode_barang_lama").val();
      nama_barang = $("#nama_barang").val();
      merek = $("#merek").val();
      spesifikasi = $("#spesifikasi").val();

      i_qty = $("#qty").val();
      qty_ket = $("#qty_ket").val();
      i_harga = $("#harga").val();

      qty = i_qty.split(".").join("");
      harga = i_harga.split(".").join("");

      if (tgl == "" || kode_barang == "" || nama_barang == ""|| merek == "" || spesifikasi == "" || supplier_note == "" || qty == "" ||  qty == 0 || qty_ket == "" || qty_ket == 0 || harga == "" || harga == 0 || no_nota == "")  {
        showNotification("alert-info", "Harap Lengkapi Form", "bottom", "center", "", ""); return;
      }

      $("#btn-simpan").prop("disabled",true);

      // alert(supplier);

      $.ajax({
          type     : "POST",
          url      : '<?php echo base_url(); ?>Master/'+status,
          data     : ({
            id : id,
            tgl : tgl,
            supplier : supplier,
            kode_barang : kode_barang,
            kode_barang_lama : kode_barang_lama,
            nama_barang : nama_barang,
            merek : merek,
            spesifikasi : spesifikasi,
            qty : qty,
            qty_ket : qty_ket,
            harga : harga,
            jenis : "Simpan_Barang" }),
          dataType : "json",
          success  : function(data){
            $("#btn-simpan").prop("disabled",true);
            if (data.data == true) {
              
              reloadTable();
              showNotification("alert-success", "Berhasil", "bottom", "center", "", "");
              
              status = 'update';

            }else{
              showNotification("alert-danger", "Kode Barang Sudah Ada", "bottom", "center", "", "");
            }
          }
      });
    }

    function tampil_edit(id){
      $(".box-data").hide();
      $(".box-form").show();
      $('.box-form').animateCss('fadeInDown');
      $("#judul").html('<h3>Form Edit Data Barang</h3>');
      $("#supplier").val("");
      $("#supplier_note").val("");
      $("#no_nota").val("");

      status = "update";

      // alert(id);

      $.ajax({
          url : '<?php echo base_url('Master/get_edit'); ?>',
          type: 'POST',
          data: {
            id: id,
            jenis:"edit_barang"},
      })
      .done(function(data) {
          json = JSON.parse(data);
          $("#btn-simpan").prop("disabled",false);

          // $("#kode_barang_lama").val(json.kode_barang);
          a = json.kode_barang.split("/");

          // $("#kode_barang").val(json.kode_barang).prop("disabled",true);
          $("#supplier").val("").prop("disabled",true).attr('style','background:#ddd;');

          $("#id1").val(a[0]).prop("disabled",true).attr('style','background:#ddd;');
          $("#id2").val(a[1]).prop("disabled",true).attr('style','background:#ddd;');

          $("#id").val(json.id);
          $("#tgl").val(json.tgl);
          $("#id_supplier").val(json.id_m_nota);
          $("#supplier_note").val(json.nama_supplier);
          $("#no_nota").val(json.no_nota);
          $("#nama_barang").val(json.nama_barang);
          $("#merek").val(json.merek);
          $("#spesifikasi").val(json.spesifikasi);
          $("#qty").val(json.qty);
          $("#qty_ket").val(json.qty_ket);
          $("#harga").val(json.harga);
      })
    }
    function deleteData(id,nm){
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
          if(isConfirm) {
            $.ajax({
              url   : '<?php echo base_url(); ?>Master/hapus/',
              type  : "POST",
              data  : {
                id:id,
                jenis:"hapus_barang"},
              success : function(data){
                if (data == 1) {
                swal("Berhasil", "", "success");
                reloadTable();
                }else{
                  swal("Gagal", "", "error");
                }
              }
            }); 
          }else{
            swal("", "Data Batal dihapus", "error");
          }
        });

    }

    function kosong(){
      
      status = "insert";

      $("#tgl").val("");
      $("#id1").val("").prop("disabled",false).attr('style','background:#fff;');
      $("#id2").val("").prop("disabled",false).attr('style','background:#fff;');
      $("#kode_barang_lama").val("");
      $("#nama_barang").val("");
      $("#merek").val("");
      $("#spesifikasi").val("");
      $("#id_supplier").val("");
      $("#supplier").val("").prop("disabled",false).attr('style','background:#fff;');
      $("#supplier_note").val("");
      $("#no_nota").val("");
      $("#supplier_lama").val("");
      $("#qty").val("");
      $("#qty_ket").val("0");
      $("#harga").val("");

      $("#btn-simpan").prop("disabled",false);
      $("#txt-btn-simpan").html("SIMPAN");
    }

    function load_supplier(){
    
    $('#supplier').select2({
         // minimumInputLength: 3,
         allowClear: true,
         placeholder: 'SELECT',
         ajax: {
            dataType: 'json',
            url      : '<?php echo base_url(); ?>/Master/laod_supplier_nota',
            delay: 800,
            data: function(params) {
              if (params.term == undefined) {
                return {
                  search: ""
                }  
              }else{
                return {
                  search: params.term
                }
              }
              
            },
            processResults: function (data, page) {
            return {
              results: data
            };
          },
        }
    });
 }

 $('#supplier').on('change', function() {
    data = $('#supplier').select2('data');
    // $("#supplier").val(data[0].text);
    $("#supplier_note").val(data[0].nama_supplier);
    $("#id_supplier").val(data[0].id);
    $("#no_nota").val(data[0].no_nota);
  });

    function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			// return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}

    let qty = document.getElementById('qty');
		qty.addEventListener('keyup', function(e){
			qty.value = formatRupiah(this.value);
		});

    let harga = document.getElementById('harga');
		harga.addEventListener('keyup', function(e){
			harga.value = formatRupiah(this.value);
		});
    
</script>