<!-- Button to trigger modal

<a href="#sendkeyModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="sendkeyModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="sendkeyModalLabel" aria-hidden="true">
 <form action="engine.php" method="post">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h3 id="sendkeyModalLabel">Distribute Key</h3>
  </div>
  <div class="modal-body">
    <p>
                <input type="hidden" name="informer" value="sendkeyModal.php">
                <input type="hidden" name="formname" value="send">
                <h4>Step 1: choose a key</h4>
                <select id="key" name="key">
                        <?php
                        $directory = opendir("./keys");
                        while($entry = readdir($directory)) {
                                $dirArray[] = $entry;
                        }
                        closedir($directory);
                        $indexCount = count($dirArray);
                        sort($dirArray);
                        $RList = "";
                        for($i=2; $i<count($dirArray); $i++) {
                                $value = $dirArray[$i];
                                $RList .= "<option value=\"".$value."\"/>".$value."<br>\n";
                        }
                        echo $RList;
                        ?>
                </select>
                        <br>

                <h4>Step 2: specify server(s) to send key to</h4>
                <i>one server per line</i><br>
                        <textarea name="servers" cols="25" rows="5"></textarea><br>

                <h4>Step 3: specify password for server(s)</h4>
                        <input class="span3" type="text" name="password" placeholder="password"><br>
                </form>
        </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Send Key</button>
  </div>
</form>
</div>
