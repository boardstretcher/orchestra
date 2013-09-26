# check time to get dns reply

# required variables
# $DNS : dns server to query
# $SITE : site to make query about

time for ((a=1; a <= 1000; a++)); do dig @$DNS $SITE; done 
