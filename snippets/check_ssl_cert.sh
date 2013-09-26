# check ssl cert of a site

# required vars
# $SITE : site name

openssl s_client -connect $SITE:443
