<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Data Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Pelanggan</small>
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Data Pelanggan</a></div>
            </h1>
        </div>
	<div class="row">
		<div id="reload">
		<table class="table table-striped" id="mydata">
			<thead>
				<tr>
					<th>Service ID</th>
                    <th>No ID</th>
                    <th>Nama Pelaggan</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Account Billing</th>
                    <th>Paket</th>
                    <th>Tanggal Pesan</th>
                    <th>Tanggal Berakhir</th>
					<th style="text-align: right;">Aksi</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
		</div>
	</div>
</div>

		<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data Pelanggan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Service ID</label>
                        <div class="col-xs-9">
                            <input name="sid" id="serviceID" class="form-control" type="text" placeholder="Service ID" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No ID</label>
                        <div class="col-xs-9">
                            <input name="nid" id="noID" class="form-control" type="text" placeholder="No ID" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-9">
                            <input name="napel" id="namaPlgn" class="form-control" type="text" placeholder="Nama Pelanggan" style="width:335px;" required>
                        </div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Order</label>
                        <div class="col-xs-9">
                            <select name="order" id="order" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Order--</option>
                                    <option value="aktivasi">Aktivasi</option>
                                    <option value="modifikasi">Modifikasi</option>
                                    <option value="isolir">Isolir</option>
                                </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <select name="stat" id="status" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Status--</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="suspend">Suspend</option>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Account Billing</label>
                        <div class="col-xs-9">
                            <input name="accb" id="accBill" class="form-control" type="text" placeholder="Account Billing" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Paket</label>
                        <div class="col-xs-9">
                            <select name="pkt" id="paket" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Paket--</option>
                                    <option value="medium">Medium</option>
                                    <option value="small">Small</option>
                                    <option value="large">Large</option>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Pemesanan</label>
                        <div class="col-xs-9">
							<input name="tglpes" id="tgl_pesan" placeholder="yyyy-mm-dd" class="form-control" type="date" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Berakhir</label>
                        <div class="col-xs-9">
                            <input name="tglhir" id="tgl_akhir" placeholder="yyyy-mm-dd" class="form-control" type="date" style="width:335px;" required>
                        </div>
                    </div>
					
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Data Pelanggan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Service ID</label>
                        <div class="col-xs-9">
                            <input name="sid" id="serviceID" class="form-control" type="text" placeholder="Service ID" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No ID</label>
                        <div class="col-xs-9">
                            <input name="nid" id="noID" class="form-control" type="text" placeholder="No ID" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-9">
                            <input name="napel" id="namaPlgn" class="form-control" type="text" placeholder="Nama Pelanggan" style="width:335px;" required>
                        </div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Order</label>
                        <div class="col-xs-9">
                            <select name="order" id="order" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Order--</option>
                                    <option value="aktivasi">Aktivasi</option>
                                    <option value="modifikasi">Modifikasi</option>
                                    <option value="isolir">Isolir</option>
                                </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <select name="stat" id="status" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Status--</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="suspend">Suspend</option>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Account Billing</label>
                        <div class="col-xs-9">
                            <input name="accb" id="accBill" class="form-control" type="text" placeholder="Account Billing" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Paket</label>
                        <div class="col-xs-9">
                            <select name="pkt" id="paket" class="form-control" style="width:335px;" required>
                                    <option value="">--Pilih Paket--</option>
                                    <option value="medium">Medium</option>
                                    <option value="small">Small</option>
                                    <option value="large">Large</option>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Pemesanan</label>
                        <div class="col-xs-9">
							<input name="tglpes" id="tgl_pesan" placeholder="yyyy-mm-dd" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Berakhir</label>
                        <div class="col-xs-9">
                            <input name="tglhir" id="tgl_akhir" placeholder="yyyy-mm-dd" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_barang();	//pemanggilan fungsi tampil barang.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil barang
		function tampil_data_barang(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>index.php/barang/data_barang',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].serviceID+'</td>'+
		                        '<td>'+data[i].noID+'</td>'+
		                        '<td>'+data[i].namaPlgn+'</td>'+
                                '<td>'+data[i].order+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td>'+data[i].accBill+'</td>'+
                                '<td>'+data[i].paket+'</td>'+
                                '<td>'+data[i].tgl_pesan+'</td>'+
                                '<td>'+data[i].tgl_akhir+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].serviceID+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].serviceID+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(serviceID, noID, namaPlgn, order, status, accBill, paket, tgl_pesan, tgl_akhir){
                    	$('#ModalaEdit').modal('show');
            			$('[name="sid_edit"]').val(data.serviceID);
            			$('[name="nid_edit"]').val(data.noID);
            			$('[name="napel_edit"]').val(data.namaPlgn);
                        $('[name="order_edit"]').val(data.order);
                        $('[name="stat_edit"]').val(data.status);
                        $('[name="accb_edit"]').val(data.accBill);
                        $('[name="pkt_edit"]').val(data.paket);
                        $('[name="tglpes_edit"]').val(data.tgl_pesan);
                        $('[name="tglhir_edit"]').val(data.tgl_akhir);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

		//Simpan Barang
		$('#btn_simpan').on('click',function(){
            var sid=$('#serviceID').val();
            var nid=$('#noID').val();
            var napel=$('#namaPlgn').val();
            var order=$('#order').val();
            var stat=$('#status').val();
            var accb=$('#accBill').val();
            var pkt=$('#paket').val();
            var tglpes=$('#tgl_pesan').val();
            var tglhir=$('#tgl_akhir').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
                dataType : "JSON",
                data : {sid:sid , nid:nid, napel:napel, order:order, stat:stat, accb:accb, pkt:pkt, tglpes:tglpes, tglhir:tglhir},
                success: function(data){
                    $('[name="sid"]').val("");
                    $('[name="nid"]').val("");
                    $('[name="napel"]').val("");
                    $('[name="order"]').val("");
                    $('[name="stat"]').val("");
                    $('[name="accb"]').val("");
                    $('[name="pkt"]').val("");
                    $('[name="tglpes"]').val("");
                    $('[name="tglhir"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Update Barang
		$('#btn_update').on('click',function(){
            var sid=$('#serviceID2').val();
            var nid=$('#noID2').val();
            var napel=$('#namaPlgn2').val();
            var order=$('#order2').val();
            var stat=$('#status2').val();
            var accb=$('#accBill2').val();
            var pkt=$('#paket2').val();
            var tglpes=$('#tgl_pesan2').val();
            var tglhir=$('#tgl_akhir2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                dataType : "JSON",
                data : {sid:sid , nid:nid, napel:napel, order:order, stat:stat, accb:accb, pkt:pkt, tglpes:tglpes, tglhir:tglhir},
                success: function(data){
                        $('[name="sid_edit"]').val("");
                        $('[name="nid_edit"]').val("");
                        $('[name="napel_edit"]').val("");
                        $('[name="order_edit"]').val("");
                        $('[name="stat_edit"]').val("");
                        $('[name="accb_edit"]').val("");
                        $('[name="pkt_edit"]').val("");
                        $('[name="tglpes_edit"]').val("");
                        $('[name="tglhir_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });

	});

</script>
</body>
</html>