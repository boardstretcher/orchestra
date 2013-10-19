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

<table class='table'>
<thead>
<tr>
<th>Hostname</th>
<th>IP</th>
<th>Connect?</th>
</tr>
<tbody>
	<?php
        $dir = './servers/';
        $files = scandir($dir);
        foreach($files as $ind_file){
                if ($ind_file == '.') { continue; }
                elseif ($ind_file == '..') { continue; }
                else {
                        $ind_file="$dir$ind_file";
                        $settings=parse_ini_file($ind_file);
                        $hostname=$settings["hostname"];
                        $ip_address=$settings["ip_address"];
                        $fp = @fsockopen ($hostname, 22, $errno, $errstr, $timeout);
                        if ($fp) {
                                echo "<tr><td>$hostname</td><td>$ip_address</td><td><button class='btn btn-success'>Success</button></td></tr>";
                                }else{
                                echo "<tr><td>$hostname</td><td>$ip_address</td><td><button class='btn btn-danger'>Failed</button></td></tr>";
                        }
                }
        };
	?>
</tbody>
</table>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</form>
</div>
