# tar up files modified in the last x days

# required vars
# $FILENAME : name of the archive
# $DAYS : number of days to go back

tar -c -f $FILENAME --after-date='$DAYS days ago' . 
