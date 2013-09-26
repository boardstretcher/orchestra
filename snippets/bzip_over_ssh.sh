# send a bzipped file over ssh

# required vars
# $PATH : path to zip up ending in /
# $USER : remote username
# $SERVER : destination server ip
# $TO : destination path ending in /

 bzip2 -c $PATH | ssh $USER@$SERVER "bzip2 -dc > $TO" 
