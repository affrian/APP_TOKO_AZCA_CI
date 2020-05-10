<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="<?php echo base_url('assets/datatables/media/css/dataTables.jqueryui.min.css'); ?>" />
</head>
<body>
	
	 <table id="ktg_table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>

                <tbody>
                  <td>as</td>
                  <td>as</td>
                  <td>as</td>
                  
                </tbody>
     
               
            </table>






      <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>

        <script>
		$(document).ready(function() {
			$("#ktg_table").dataTable();	
		});
	</script>
</body>
</html>