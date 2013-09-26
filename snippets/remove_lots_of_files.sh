# remove more than 1000 files

# required vars
# $DIR : directory to start search in
# $NAME : filename pattern to match against

find $DIR -name ‘$NAME’ -print0 | xargs -n1000 -0 rm -f 
