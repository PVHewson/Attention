<div id="modalLoadMessage" class="modal">
<div class="modal-content">
<h4>Error encountered</h4>
<p><?php echo $loadMessage ?></p>
</div>
<div class="modal-footer red darken-1">
<a href="" class="modal-close waves-effect waves-res btn-flat white">Close</a>
</div>
</div>
<script>
$(document).ready(function() {
	$('h4', '#modalLoadMessage').text('Hola');
	$('#modalLoadMessage').modal();
	$('#modalLoadMessage').modal('open');
});
</script>

