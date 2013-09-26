# copy source to multiple server destinations
#
# required variables
# $SERVER_LIST : server list

# example:
SERVER_LIST=(server1 server2 server3)

for i in $SERVER_LIST; do scp somefile.txt $i:/home/destination/; done 
