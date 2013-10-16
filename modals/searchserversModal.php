<!-- Button to trigger modal

<a href="#searchserversModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="searchserversModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="searchserversModalLabel" aria-hidden="true">
 <form action="engine.php" method="post">
  <div class="modal-header">
    <h3 id="searchserversModalLabel">Search servers</h3>
  </div>
  <div class="modal-body">
    <p>
                        <input type="hidden" name="informer" value="server">
                        <input type="hidden" name="formname" value="search">
			<input type="text" class="search-query" name="search"><button type="submit" class="btn"><i class="icon-search"></i></button>
        </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</form>
</div>
