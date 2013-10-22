<!-- Button to trigger modal

<a href="#addserverModal" role="button" class="btn" data-toggle="modal">Create Key</a>

-->

<!-- Modal -->
<div id="addserverModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addserverModalLabel" aria-hidden="true">
<form action="engine.php" method="post">
  <div class="modal-header">
    <h3 id="addserverModalLabel">Add server</h3>
  </div>
  <div class="modal-body">
   	<input type="hidden" name="informer" value="server">
        <input type="hidden" name="formname" value="add">
   <h4>server info</h4>
           <p>
        <input class="span3" type="text" name="hostname" placeholder="hostname"><br>
        <input class="span3" type="text" name="ipaddress" placeholder="ipaddress"><br>
        <input class="span3" type="text" name="tags" placeholder="tags,tags,tags"><br>
        </p>
   <h4>server type</h4>
        <p>
        <select id="os" name="os">
                <option value="" selected>Choose an OS</option>
                <option value="ubuntu12">ubuntu12</option>
                <option value="ubuntu13">ubuntu13</option>
                <option value="rhel4compatible">rhel4compatible</option>
                <option value="rhel5compatible">rhel5compatible</option>
                <option value="rhel6compatible">rhel6compatible</option>
                <option value="other">other</option>
        </select>
        </p>
   <h4>choose key</h4>
        <p>
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

		// i = 2, so . and .. are ignored
                for($i=2; $i<count($dirArray); $i++) {
                        $value = $dirArray[$i];
			if (!preg_match('/\.pub$/',$value)) {
                        $RList .= "<option value=".$value." />".$value."<br>";
			}
                }
                echo $RList;
        ?>
        </select><br><br>
        </p>
</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Add Server</button>
  </div>
</form>
</div>
