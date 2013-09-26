# delete matching lines from file

# required vars
# $WORD : search for word, delete line with word

sed -i '$WORD/d' filename 
