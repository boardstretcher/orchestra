<!-- Button to trigger modal

<a href="#createkeyModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="createkeyModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="createkeyModalLabel" aria-hidden="true">
<form action="engine.php" method="post">
  <div class="modal-header">
    <h3 id="createkeyModalLabel">Create SSH Key</h3>
  </div>
  <div class="modal-body">
	<p>
                <input type="hidden" name="informer" value="key">
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
