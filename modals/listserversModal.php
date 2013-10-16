<!-- Button to trigger modal

<a href="#listserversModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="listserversModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="listserversModalLabel" aria-hidden="true">
 <form action="engine.php" method="post">
  <div class="modal-header">
    <h3 id="listserversModalLabel">Server list</h3>
  </div>
  <div class="modal-body">
    <p>
                        <ul>
                        <?php
                        $dir = './servers/';
                        $files = scandir($dir);
                        foreach($files as $ind_file){
                                if ($ind_file == '.') {
                                        continue; }
                                        elseif ($ind_file == '..') {
                                        continue; }
                                        else {?>
                                        <li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></a></li>
                        <?php
                        }};
                        ?>
                        </ul>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Send Key</button>
  </div>
</form>
</div>
