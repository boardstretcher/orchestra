<!DOCTYPE html>

<!--   this might be the way i edit snippets, scripts... -->
<!-- need a save function tho -->

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Editor</title>
<style type="text/css" media="screen">
body {
overflow: hidden;
}

#editor { 
margin: 0;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
}
</style>
</head>
<body>

<pre id="editor">
<?php echo htmlspecialchars(addslashes(file_get_contents("./snippets/yum_security.sh"))); ?>
</pre>

<script src="./js/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
var editor = ace.edit("editor");
editor.setTheme("ace/theme/twilight");
editor.getSession().setMode("ace/mode/sh");
canon.addCommand({
name: "save",
bindKey: {
win: "Ctrl-S",
mac: "Command-S",
sender: "editor|cli"
},
exec: function() {
saveFile();
}
});
</script>

</body>
</html>
