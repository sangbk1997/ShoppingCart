<script type="text/javascript">
	$(document).ready(function(){
		$("#btnSearch").click(function(){
			var keyword=$('#txtSearch').val();
			$.post("timkiem.php",{tukhoa:keyword},function(data)){
				$('#dataSearch').html(data);
			}
		})
	})
</script>