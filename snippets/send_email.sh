# send an email using sendmail

# require variables
# $FROM : from email address
# $SUBJECT : the subject
# $TO : recipient email
# $MESSAGE : message

sendmail -f $FROM -u $SUBJECT -t $TO -m $MESSAGE
