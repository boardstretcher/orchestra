# change file owner from x to y

# required vars
# $DIR : directory to start in
# $FROM : current user of file
# $TO : new user of file

find $DIR -user $FROM -exec chown $TO:$TO {} \; 
