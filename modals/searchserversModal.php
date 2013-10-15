<!-- Button to trigger modal

<a href="#searchserversModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="searchserversModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="searchserversModalLabel" aria-hidden="true">
 <form action="engine.php" method="post">
  <div class="modal-header">
    <h3 id="searchserversModalLabel">Distribute Key</h3>
  </div>
  <div class="modal-body">
    <p>
                        <input type="hidden" name="informer" value="server">
                        <input type="hidden" name="formname" value="search">
                        <input type="text" name="search"><br>
        </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Search</button>
  </div>
</form>
</div>
