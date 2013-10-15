<link href="css/bootstrap.css" rel="stylesheet" media="all" /> 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Button to trigger modal -->
<a href="#keysModal" role="button" class="btn" data-toggle="modal">Create Key</a>

<!-- Modal -->
<div id="keysModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="keysModalLabel" aria-hidden="true">
<form action="engine.php" method="post">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="keysModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
	<p>
                <input type="hidden" name="informer" value="keys.php">
                <input type="hidden" name="formname" value="create">
                <input class="span3" type="text" name="keyname" placeholder="keyname (e.g mykey)"><br>
                <input class="span3" type="text" name="keytype" placeholder="keytype (e.g rsa)"><br>
	</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Create Key</button>
  </div>
</form>
</div>
