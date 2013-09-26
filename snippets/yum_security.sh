# install yum security and scan for security updates
# requires centos/sl/redhat

yum install yum-plugin-security yum-security  
yum --security check-update 
yum list-security 
