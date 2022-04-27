<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Master Ajax</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	<?php foreach ($member as $member) : ?>
		<button type="submit" name='klikselect' onclick="getid(this.value)" value='<?= $member['member_id']; ?>' class="btn btn-primary"><?= $member['member_name']; ?></button>
	<?php endforeach; ?>



<body class='container my-5'>

	<button name="" id="btnmodal" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link" href="#" role="button">Edit</button>
	<div class="modal " id="editdata" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editdata" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Edit Data <?= $member['member_name']; ?></h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="tampilkandata"></div>

				</div>

			</div>
		</div>
	</div>


	<div class="mb-3">
		<label for="" class="form-label"></label>
	</div>
	<!-- <div id="tampilkandata"></div> -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#gantiselect').change(function() {
			var id = $(this).val();
			$.ajax({
				url: "<?php echo site_url('myData/getData'); ?>",
				method: "POST",
				data: {
					id: id
				},
				async: true,
				dataType: 'html',
				success: function(html) {
					$('#tampilkandata').html(html);
				}
			});
			return false;
		});

	});
</script>
<script>
	function getid(id) {
		var id = id;
		$("#editdata").toggle();
		$.ajax({
			type: "POST",
			url: "<?= base_url("myData/editData"); ?>",
			data: {
				"id": id
			},
			dataType: "html",
			success: function(html) {
				// alert(data);
				$('#tampilkandata').html(html);

			}
		});
	}
</script>
<script>
	$(document).ready(function() {
		$("#btnmodal").click(function(e) {
			e.preventDefault();
			$("#editdata").toggle();
		});
	});
</script>

</html>
