<div class="navbar navbar-inverse ">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="">Admin</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li class="btn btn-inverse">Visit Github</li>
<li>...</li>
<li class="btn btn-inverse">Go to Forums</li>
<li>...</li>
<li class="btn btn-inverse">Update Orchestra</li>
<li>...</li>
<li class="btn btn-warning">Restart Apache</li>
<li>...</li>
<li class="btn btn-danger">Delete Everything!</li>
</ul>
</div>
</div>
</div>
</div>

<?php
        $fhremote = file_get_contents("https://raw.github.com/boardstretcher/orchestra/master/stats/version.nfo");
        $fhlocal = file_get_contents("stats/version.nfo");
        if($fhlocal == $fhremote){
        echo "<div class=\"alert alert-info\"><strong>Nice!</strong> Orchestra is up to date.</div>";
        }
?>


