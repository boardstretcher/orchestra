# list x most recent rpm installations
# requires centos/redhat/sl

# required vars
# $NUM : how many rpms to list in order of recent installation

rpm -qa --queryformat '%{installtime} (%{installtime:date}) %{name}\n' | sort -n | tail -$NUM
