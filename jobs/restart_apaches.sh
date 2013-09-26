# status: active
# name: restart apaches
# desc: job to run on a server and restart apache
# default_servers: web1,web2,web3
# default_key: development_key
# os: ubuntu 
# tags: web,production,apache
# created: 1378574928
# updated: 1378576000
# lastrun: 1378577021
# successes: 42
# failures: 3
# user: root
# requiredvars: $FUNCTION
# script
cd
apachectl $FUNCTION
